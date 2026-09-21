<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruAdminController extends Controller
{
    public function index()
    {
        $guru = Guru::orderBy('urutan')->get();
        return view('dashboard.guru.index', compact('guru'));
    }

    public function create()
    {
        return view('dashboard.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'inisial' => 'required|string|max:10',
            'foto' => 'nullable|string|max:255',
            'urutan' => 'nullable|integer',
        ]);

        Guru::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit(Guru $guru)
    {
        return view('dashboard.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'inisial' => 'required|string|max:10',
            'foto' => 'nullable|string|max:255',
            'urutan' => 'nullable|integer',
        ]);

        $guru->update($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}