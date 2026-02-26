<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

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
            'is_featured' => ['nullable', 'boolean'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']) . '-' . uniqid();
        }

        $data['is_featured'] = $request->boolean('is_featured');

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
            'is_featured' => ['nullable', 'boolean'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']) . '-' . $project->id;
        }

        $data['is_featured'] = $request->boolean('is_featured');

        $project->update($data);

        return redirect()
            ->route('admin.projects.index')
            ->with('status', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('status', 'Project deleted successfully.');
    }
}
