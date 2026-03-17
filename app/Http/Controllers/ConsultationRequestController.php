<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConsultationRequestController extends Controller
{
    private function issueCaptcha(Request $request): string
    {
        $a = random_int(1, 9);
        $b = random_int(1, 9);
        $ops = ['+', '-'];
        $op = $ops[array_rand($ops)];
        $answer = $op === '+' ? ($a + $b) : ($a - $b);

        // avoid negative results (better UX)
        if ($answer < 0) {
            [$a, $b] = [$b, $a];
            $answer = $a - $b;
        }

        $question = "{$a} {$op} {$b}";

        $request->session()->put([
            'consultation_captcha_question' => $question,
            'consultation_captcha_answer' => hash('sha256', (string) $answer . '|' . $request->session()->getId()),
            'consultation_captcha_issued_at' => now()->timestamp,
        ]);

        return $question;
    }

    public function captcha(Request $request): JsonResponse
    {
        $question = $this->issueCaptcha($request);

        return response()->json([
            'question' => $question,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'space_type' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string'],
            'website' => ['nullable', 'string', 'max:255'], // honeypot
            'captcha' => ['required', 'string', 'max:10'],
        ]);

        // Honeypot: if this hidden field is filled, treat as spam and pretend success
        if (! empty($data['website'])) {
            return redirect('/#contact')->with('consultation_status', 'Cảm ơn bạn! Chúng tôi đã nhận yêu cầu và sẽ liên hệ sớm.');
        }

        // If captcha wasn't issued yet, issue one and force retry
        if (! $request->session()->has('consultation_captcha_answer')) {
            $this->issueCaptcha($request);

            return back()
                ->withErrors(['captcha' => 'Vui lòng nhập mã xác nhận.'])
                ->withInput();
        }

        // Minimum time on form (basic bot deterrent)
        $issuedAt = (int) $request->session()->get('consultation_captcha_issued_at', 0);
        if ($issuedAt > 0 && (now()->timestamp - $issuedAt) < 3) {
            return back()
                ->withErrors(['captcha' => 'Vui lòng chờ vài giây và thử lại.'])
                ->withInput();
        }

        $expected = $request->session()->get('consultation_captcha_answer');
        $given = trim((string) ($data['captcha'] ?? ''));
        $givenHash = hash('sha256', $given . '|' . $request->session()->getId());

        if (empty($expected) || ! hash_equals($expected, $givenHash)) {
            return back()
                ->withErrors(['captcha' => 'Mã xác nhận không đúng. Vui lòng thử lại.'])
                ->withInput();
        }

        // rotate captcha after success
        $this->issueCaptcha($request);

        unset($data['website']);
        unset($data['captcha']);

        ConsultationRequest::create($data);

        return redirect('/#contact')->with('consultation_status', 'Cảm ơn bạn! Chúng tôi đã nhận yêu cầu và sẽ liên hệ sớm.');
    }
}
