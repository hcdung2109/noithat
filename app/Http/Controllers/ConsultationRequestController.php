<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConsultationRequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'space_type' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string'],
        ]);

        ConsultationRequest::create($data);

        return redirect('/#contact')->with('consultation_status', 'Cảm ơn bạn! Chúng tôi đã nhận yêu cầu và sẽ liên hệ sớm.');
    }
}
