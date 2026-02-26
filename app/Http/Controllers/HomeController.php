<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show interior design landing page.
     */
    public function index(): View
    {
        $featuredProjects = Project::query()
            ->where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        return view('interior.home', compact('featuredProjects'));
    }

    /**
     * Show about studio page.
     */
    public function about(): View
    {
        return view('interior.about');
    }
}
