<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Tampilkan halaman profile
    public function index()
    {
        $user = \App\Models\User::first(); // atau Auth::user() kalau sudah login
        return view('pages.Profile.index', compact('user'));
    }

    public function edit()
    {
        $user = \App\Models\User::first();
        return view('pages.Profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'            => 'required',
            'email'           => 'required|email',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = \App\Models\User::first();

        if ($request->hasFile('profile_picture')) {

            if ($user->profile_picture && file_exists(public_path('uploads/profile/' . $user->profile_picture))) {
                unlink(public_path('uploads/profile/' . $user->profile_picture));
            }

            $file     = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profile'), $filename);

            $user->profile_picture = $filename;
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/profile')->with('success', 'Profile berhasil diperbarui!');
    }
}
