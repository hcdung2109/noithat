<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderByDesc('created_at')->paginate(15);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $project = new Project();

        return view('admin.projects.create', compact('project'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:projects,slug'],
            'location' => ['nullable', 'string', 'max:255'],
            'style' => ['nullable', 'string', 'max:255'],
            'area' => ['nullable', 'string', 'max:255'],
            'duration' => ['nullable', 'string', 'max:255'],
            'thumbnail_url' => ['nullable', 'string', 'max:2048'],
            'thumbnail_file' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'gallery_files' => ['nullable', 'array'],
            'gallery_files.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'is_featured' => ['nullable', 'boolean'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']) . '-' . uniqid();
        }

        if ($request->hasFile('thumbnail_file')) {
            $path = $request->file('thumbnail_file')->store('projects', 'public');
            $data['thumbnail_url'] = '/storage/' . $path;
        }

        $data['is_featured'] = $request->boolean('is_featured');
        unset($data['thumbnail_file'], $data['gallery_files']);

        $project = Project::create($data);

        if ($request->hasFile('gallery_files')) {
            $sortOrder = 0;
            foreach ($request->file('gallery_files') as $file) {
                $path = $file->store('projects/gallery', 'public');
                $project->images()->create([
                    'path' => '/storage/' . $path,
                    'sort_order' => $sortOrder++,
                ]);
            }
        }

        return redirect()
            ->route('admin.projects.index')
            ->with('status', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return redirect()
            ->route('admin.projects.edit', $project);
    }

    public function edit(Project $project)
    {
        $project->load('images');

        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:projects,slug,' . $project->id],
            'location' => ['nullable', 'string', 'max:255'],
            'style' => ['nullable', 'string', 'max:255'],
            'area' => ['nullable', 'string', 'max:255'],
            'duration' => ['nullable', 'string', 'max:255'],
            'thumbnail_url' => ['nullable', 'string', 'max:2048'],
            'thumbnail_file' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'gallery_files' => ['nullable', 'array'],
            'gallery_files.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'remove_image_ids' => ['nullable', 'array'],
            'remove_image_ids.*' => ['integer', 'exists:project_images,id'],
            'is_featured' => ['nullable', 'boolean'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']) . '-' . $project->id;
        }

        if ($request->hasFile('thumbnail_file')) {
            if (!empty($project->thumbnail_url) && str_starts_with($project->thumbnail_url, '/storage/')) {
                $oldPath = ltrim(str_replace('/storage/', '', $project->thumbnail_url), '/');
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('thumbnail_file')->store('projects', 'public');
            $data['thumbnail_url'] = '/storage/' . $path;
        }

        $removeIds = $data['remove_image_ids'] ?? [];
        unset($data['thumbnail_file'], $data['gallery_files'], $data['remove_image_ids']);

        if (!empty($removeIds)) {
            $toRemove = $project->images()->whereIn('id', $removeIds)->get();
            foreach ($toRemove as $img) {
                if (str_starts_with($img->path, '/storage/')) {
                    $oldPath = ltrim(str_replace('/storage/', '', $img->path), '/');
                    Storage::disk('public')->delete($oldPath);
                }
                $img->delete();
            }
        }

        if ($request->hasFile('gallery_files')) {
            $maxOrder = $project->images()->max('sort_order') ?? -1;
            $sortOrder = $maxOrder + 1;
            foreach ($request->file('gallery_files') as $file) {
                $path = $file->store('projects/gallery', 'public');
                $project->images()->create([
                    'path' => '/storage/' . $path,
                    'sort_order' => $sortOrder++,
                ]);
            }
        }

        $data['is_featured'] = $request->boolean('is_featured');

        $project->update($data);

        return redirect()
            ->route('admin.projects.index')
            ->with('status', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if (!empty($project->thumbnail_url) && str_starts_with($project->thumbnail_url, '/storage/')) {
            $oldPath = ltrim(str_replace('/storage/', '', $project->thumbnail_url), '/');
            Storage::disk('public')->delete($oldPath);
        }

        foreach ($project->images as $img) {
            if (str_starts_with($img->path, '/storage/')) {
                $p = ltrim(str_replace('/storage/', '', $img->path), '/');
                Storage::disk('public')->delete($p);
            }
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('status', 'Project deleted successfully.');
    }
}
