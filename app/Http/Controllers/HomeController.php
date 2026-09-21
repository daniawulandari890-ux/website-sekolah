<?php

namespace App\Http\Controllers;
use App\Models\Profil;
class HomeController extends Controller
{
    public function index()
    {
        // Data sekolah - nantinya bisa diganti dengan Model::first() dari database
        $profil = Profil::first();

$sekolah = [
    'nama' => $profil->nama,
    'akreditasi' => $profil->akreditasi,
    'tahun_berdiri' => $profil->tahun_berdiri,
    'jumlah_siswa' => $profil->jumlah_siswa,
    'jumlah_guru' => $profil->jumlah_guru,
];

        // Data program unggulan
        $program = [
            [
                'judul' => 'RELASI (Rabu Literasi)',
                'deskripsi' => 'Kegiatan rutin mingguan bagi seluruh warga sekolah untuk menumbuhkan budaya membaca dan memperluas wawasan.',
            ],
            [
                'judul' => 'APEL PAGI',
                'deskripsi' => 'melatih kedisiplinan, menghargai waktu, serta mempersiapkan mental dan fisik siswa sebelum kegiatan belajar dimulai.',
            ],
            [
                'judul' => 'SEHATI (Senam Sehat SMK Negeri 1 Cijati)',
                'deskripsi' => 'meningkatkan kebugaran jasmani, menjaga kesehatan jantung, serta meningkatkan kelenturan dan kekuatan otot tubuh..',
            ],
        ];

        // Data pengumuman terbaru
        $berita = [
            [
                'tanggal' => 'November 2026',
                'judul'   => 'JatiziFestival',
                'ringkasan' => '"Bersatu dalam karya,Besaudara dalam laga,HARMONI (Hari untuk kabisa,olahraga & kreasi seni) .',
            ],
             [
                'tanggal' => '15 Juli 2026  ',
                'judul'   => 'Pembukaan MPLS Pancawaluya ',
                'ringkasan' => 'Membangun generasi berkarakter,Disiplin,dan siap Berprestasi bersama Panca Waluya.',
            ],
            [
                'tanggal' => '23 Juni 2026  ',
                'judul'   => 'Jatizi Fun Run',
                'ringkasan' => 'JATIZI Berlari,Sehat Menginpirasi,Langkah hebat,Seamngat hebat,Prestasi Meningkat.',
            ],
            [
                'tanggal' => '14 Febuari 2026',
                'judul'   => 'PANTER (Pendidikan Akhlak dan Karakter)',
                'ringkasan' => 'Nilai Kedisiplinan,tanggung jawab,dan jiwa nasionalisme terus di tanamkan untuk membentuk untuk membentuk generasi vokasi yang tanggung dan berintegritas.',
            ],
            [
                'tanggal' => '29 Januari 2026',
                'judul'   => 'JATIZI BANK',
                'ringkasan' => 'Menabung di sekolah adalah program menabung yang dikelola langsung oleh pihak sekolah serta bekerja sama dengan bank BJB.',
            ],
        ];

        return view('home.index', compact('sekolah', 'program', 'berita'));
    }
}
