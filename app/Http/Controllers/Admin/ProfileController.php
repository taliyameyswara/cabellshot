<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $admin = Auth::user();
        return view('admin.profile.index', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Auth::user();

        // Validate
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $admin->id,
            'phone_number' => 'required|string|max:14',
        ]);

        // Update
        $admin->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
}
