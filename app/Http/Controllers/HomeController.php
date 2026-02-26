<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show interior design landing page.
     */
    public function index(): View
    {
        return view('interior.home');
    }

    /**
     * Show about studio page.
     */
    public function about(): View
    {
        return view('interior.about');
    }
}

