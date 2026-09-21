<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Data ringkasan - nantinya bisa diganti query ke database (Model::count(), dst)
        $statistik = [
            ['label' => 'Total Siswa',      'nilai' => 720, 'warna' => 'navy'],
            ['label' => 'Total Guru',       'nilai' => 51,  'warna' => 'gold'],
            ['label' => 'Total Fasilitas',      'nilai' => 27,  'warna' => 'sage'],
            ['label' => 'Pengumuman Aktif', 'nilai' => 5,   'warna' => 'navy'],
        ];

        $pengumumanTerbaru = [
            ['tanggal' => '28 Agt 2026', 'judul' => 'Pendaftaran Peserta Didik Baru 2027/2028 Dibuka', 'status' => 'Tayang'],
            ['tanggal' => '20 Agt 2026', 'judul' => 'Tim Robotik Raih Juara 1 Kompetisi Provinsi', 'status' => 'Tayang'],
            ['tanggal' => '12 Agt 2026', 'judul' => 'Jadwal Ujian Tengah Semester Ganjil Terbit', 'status' => 'Tayang'],
            ['tanggal' => '05 Agt 2026', 'judul' => 'Rapat Wali Murid Semester Ganjil', 'status' => 'Draf'],
        ];
$user = Auth::user();

$guru = \App\Models\Guru::orderBy('urutan')->get();

return view('dashboard.index', compact('statistik', 'pengumumanTerbaru', 'user', 'guru'));
    }
}
