<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultationRequest;
use Illuminate\View\View;

class ConsultationRequestController extends Controller
{
    public function index(): View
    {
        $consultationRequests = ConsultationRequest::query()
            ->latest()
            ->paginate(20);

        return view('admin.consultations.index', compact('consultationRequests'));
    }
}
