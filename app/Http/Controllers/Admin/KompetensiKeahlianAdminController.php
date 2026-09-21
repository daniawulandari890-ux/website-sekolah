<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KompetensiKeahlian;
use Illuminate\Http\Request;

class KompetensiKeahlianAdminController extends Controller
{
    public function index()
    {
        $kompetensi = KompetensiKeahlian::orderBy('nama')->get();
        return view('dashboard.kompetensi.index', compact('kompetensi'));
    }

    public function create()
    {
        return view('dashboard.kompetensi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'mapel' => 'nullable|string|max:255',
            'prospek' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'warna' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:255',
        ]);

        KompetensiKeahlian::create($validated);

        return redirect()->route('admin.kompetensi.index')->with('success', 'Kompetensi Keahlian berhasil ditambahkan.');
    }

    public function edit(KompetensiKeahlian $kompetensi)
    {
        return view('dashboard.kompetensi.edit', compact('kompetensi'));
    }

    public function update(Request $request, KompetensiKeahlian $kompetensi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'mapel' => 'nullable|string|max:255',
            'prospek' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'warna' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:255',
        ]);

        $kompetensi->update($validated);

        return redirect()->route('admin.kompetensi.index')->with('success', 'Kompetensi Keahlian berhasil diperbarui.');
    }

    public function destroy(KompetensiKeahlian $kompetensi)
    {
        $kompetensi->delete();
        return redirect()->route('admin.kompetensi.index')->with('success', 'Kompetensi Keahlian berhasil dihapus.');
    }
}