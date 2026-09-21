<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::orderBy('nama')->get();

        return view('ekstrakurikuler.index', compact('ekstrakurikuler'));
    }
}
                