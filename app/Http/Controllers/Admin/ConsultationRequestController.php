<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

    public function create(): View
    {
        $consultationRequest = new ConsultationRequest();

        return view('admin.consultations.create', compact('consultationRequest'));
    }

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

        return redirect()
            ->route('admin.consultations.index')
            ->with('status', 'Đã thêm yêu cầu tư vấn.');
    }

    public function edit(ConsultationRequest $consultation): View
    {
        return view('admin.consultations.edit', [
            'consultationRequest' => $consultation,
        ]);
    }

    public function update(Request $request, ConsultationRequest $consultation): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'space_type' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string'],
        ]);

        $consultation->update($data);

        return redirect()
            ->route('admin.consultations.index')
            ->with('status', 'Đã cập nhật yêu cầu tư vấn.');
    }

    public function destroy(ConsultationRequest $consultation): RedirectResponse
    {
        $consultation->delete();

        return redirect()
            ->route('admin.consultations.index')
            ->with('status', 'Đã xóa yêu cầu tư vấn.');
    }
}
