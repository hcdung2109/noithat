<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
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
        unset($data['thumbnail_file']);

        Project::create($data);

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

        $data['is_featured'] = $request->boolean('is_featured');
        unset($data['thumbnail_file']);

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

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('status', 'Project deleted successfully.');
    }
}
