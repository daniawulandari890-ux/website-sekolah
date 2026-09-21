<?php

namespace App\Http\Controllers;

use App\Models\KompetensiKeahlian;

class KompetensiKeahlianController extends Controller
{
    public function index()
    {
        $kompetensi = KompetensiKeahlian::orderBy('nama')->get()->map(function ($item) {
            return [
                'nama' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'mapel' => [$item->mapel],
                'prospek' => $item->prospek,
                'icon' => $item->icon,
                'warna' => $item->warna,
                'logo' => $item->logo,
            ];
        });

        return view('kompetensi.index', compact('kompetensi'));
    }
}