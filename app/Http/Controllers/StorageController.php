<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class StorageController extends Controller
{
    /**
     * Serve file from storage/app/public (for hosting không hỗ trợ symlink).
     * URL: /storage/projects/xxx.jpg -> storage/app/public/projects/xxx.jpg
     */
    public function show(Request $request, string $path): BinaryFileResponse
    {
        $path = trim($path, '/');

        // Chặn path traversal (../)
        if (str_contains($path, '..')) {
            abort(403);
        }

        $fullPath = storage_path('app/public/' . $path);

        if (! is_file($fullPath)) {
            abort(404);
        }

        // Đảm bảo file nằm trong storage/app/public
        $publicRoot = realpath(storage_path('app/public'));
        if ($publicRoot === false || ! str_starts_with(realpath($fullPath), $publicRoot)) {
            abort(403);
        }

        $mimeType = mime_content_type($fullPath) ?: 'application/octet-stream';

        return response()->file($fullPath, [
            'Content-Type' => $mimeType,
        ]);
    }
}
