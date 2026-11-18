<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);
        $fileName = $request->file('file')->getClientOriginalName();
        // $public_path = storage_path('app/public/uploads');
        $public_path = public_path('uploads');
        $path = request()->file('file')->move($public_path, $fileName);

        // $path = $request->file('file')->store('uploads','public');
        return response()->json(['message' => 'File uploaded successfully!', 'path' =>$path]);
    }
}
