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
            ->take(9)
            ->get();

        // Ensure captcha exists (question/answer issued in session)
        if (! session()->has('consultation_captcha_question')) {
            $a = random_int(1, 9);
            $b = random_int(1, 9);
            session([
                'consultation_captcha_question' => "{$a} + {$b}",
                'consultation_captcha_answer' => hash('sha256', (string) ($a + $b) . '|' . session()->getId()),
                'consultation_captcha_issued_at' => now()->timestamp,
            ]);
        }

        $captchaQuestion = session('consultation_captcha_question');

        return view('interior.home', compact('featuredProjects', 'captchaQuestion'));
    }

    /**
     * Show about studio page.
     */
    public function about(): View
    {
        return view('interior.about');
    }
}
