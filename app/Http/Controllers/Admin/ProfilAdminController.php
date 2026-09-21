<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilAdminController extends Controller
{
    public function edit()
    {
        $profil = Profil::first();
        return view('dashboard.profil.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'akreditasi' => 'nullable|string|max:10',
            'tahun_berdiri' => 'nullable|integer',
            'jumlah_siswa' => 'nullable|integer',
            'jumlah_guru' => 'nullable|integer',
        ]);

        $profil = Profil::first();
        $profil->update($validated);

        return redirect()->route('admin.profil.edit')->with('success', 'Profil sekolah berhasil diperbarui.');
    }
}