<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function indexAdmin_Anggota()
    {
        $user = Auth::user();
        if ($user->role == 'pemilik') {
            $anggota = User::where('role', 'anggota')->with('bos')->get()->sortBy(function ($anggota) {
                return $anggota->bos->name . ' ' . $anggota->name;
            });
        } else {
            $adminId = $user->id;
            $anggota = User::where('role', 'anggota')
                ->where('bos_id', $adminId)
                ->orderBy('name', 'asc')
                ->get();
        }
        return view('page.daftaranggotadanadmin', compact('anggota'));
    }

    public function index()
    {
        $adminId = Auth::user()->id; 
        $anggota = User::where('role', 'anggota')->where('bos_id', $adminId)->get();
        return view('page.daftaranggota', compact('anggota'));
    }

    public function create()
    {
        return view('page.createanggota');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_wa' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
            'password' => Hash::make($request->password),
            'role' => 'anggota',
            'foto' => 'profile/fotodefault.jpg',
            'bos_id' => Auth::user()->id, 
        ]);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit(User $anggota)
    {
        return view('page.editanggota', compact('anggota'));
    }

    public function update(Request $request, User $anggota)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $anggota->id,
            'no_wa' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $anggota->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
        ]);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diupdate.');
    }

    public function destroy(User $anggota)
    {
        $anggota->delete();
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
