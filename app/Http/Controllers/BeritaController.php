<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::orderByDesc('tanggal')->get()->map(function ($item) {
            return [
                'tanggal' => \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y'),
                'judul' => $item->judul,
                'ringkasan' => Str::limit($item->isi, 150),
                'gambar' => $item->gambar,
            ];
        });

        return view('berita.index', compact('berita'));
    }
}