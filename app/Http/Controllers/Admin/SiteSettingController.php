<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SiteSettingController extends Controller
{
    public function edit(): View
    {
        $siteSetting = SiteSetting::query()->firstOrCreate([], [
            'company_name' => 'CÔNG TY TNHH STUDIO NỘI THẤT BICSPACE',
            'brand_name' => 'Studio Nội Thất',
        ]);

        return view('admin.settings', compact('siteSetting'));
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'brand_name' => ['required', 'string', 'max:255'],
            'logo_url' => ['nullable', 'string', 'max:2048'],
            'logo_file' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:2048'],
            'tax_code' => ['nullable', 'string', 'max:255'],
            'hotline' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'working_hours' => ['nullable', 'string', 'max:255'],
        ]);

        $siteSetting = SiteSetting::query()->firstOrCreate([], [
            'company_name' => 'CÔNG TY TNHH STUDIO NỘI THẤT BICSPACE',
            'brand_name' => 'Studio Nội Thất',
        ]);

        if ($request->hasFile('logo_file')) {
            if (!empty($siteSetting->logo_url) && str_starts_with($siteSetting->logo_url, '/storage/')) {
                $oldPath = ltrim(str_replace('/storage/', '', $siteSetting->logo_url), '/');
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('logo_file')->store('logos', 'public');
            $data['logo_url'] = '/storage/' . $path;
        }

        unset($data['logo_file']);

        $siteSetting->update($data);

        return redirect()->route('admin.settings.edit')->with('status', 'Cập nhật thông tin website thành công.');
    }
}
