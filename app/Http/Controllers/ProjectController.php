<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderByDesc('created_at')->paginate(9);

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load('images');

        return view('projects.show', compact('project'));
    }
}
