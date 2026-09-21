<?php

namespace App\Http\Controllers;
use App\Models\Guru;

class DataGuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('urutan', 'asc')->get();
        return view('guru.index', compact('gurus'));
    }
}
