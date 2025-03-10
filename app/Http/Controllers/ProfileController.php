<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'nama' => 'required|string|max:255',
    //         'deskripsi' => 'required|string',
    //         'pendidikan1' => 'nullable|string|max:255',
    //         'pendidikan2' => 'nullable|string|max:255',
    //         'pendidikan3' => 'nullable|string|max:255',
    //         'alamat' => 'nullable|string|max:255',
    //         'whatsapp' => 'nullable|string|max:15',
    //         'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240', // Example for file upload
    //     ]);

    //     // Handle file upload
    //     $filePath = null;
    //     if ($request->hasFile('file')) {
    //         $filePath = $request->file('file')->store('profiles', 'public');
    //     }

    //     Profile::create([
    //         'email' => $request->input('email'),
    //         'nama' => $request->input('nama'),
    //         'deskripsi' => $request->input('deskripsi'),
    //         'pendidikan1' => $request->input('pendidikan1'),
    //         'pendidikan2' => $request->input('pendidikan2'),
    //         'pendidikan3' => $request->input('pendidikan3'),
    //         'alamat' => $request->input('alamat'),
    //         'whatsapp' => $request->input('whatsapp'),
    //         'file_path' => $filePath,
    //     ]);

    //     return redirect()->route('profile')->with('success', 'Profile created successfully!');
    // }
}
