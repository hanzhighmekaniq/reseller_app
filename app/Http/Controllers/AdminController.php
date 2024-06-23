<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'bos')->get();
        return view('page.daftaradmin', compact('admins'));
    }

    public function create()
    {
        return view('page.createadmin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'no_wa' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'area' => $request->area,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
            'password' => Hash::make($request->password),
            'role' => 'bos',
            'foto' => 'profile/fotodefault.jpg',
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function edit(User $admin)
    {
        return view('page.editadmin', compact('admin'));
    }

    public function update(Request $request, User $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users,email,' . $admin->id,
            'no_wa' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $admin->update([
            'name' => $request->name,
            'area' => $request->area,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin berhasil diupdate.');
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin berhasil dihapus.');
    }
}
