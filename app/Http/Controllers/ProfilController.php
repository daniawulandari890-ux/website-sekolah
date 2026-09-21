<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function index()
    {
        $visi = 'Menjadi sekolah menengah kejuruan unggul yang menghasilkan lulusan kompeten, berkarakter, dan berdaya saing di dunia kerja maupun dunia usaha dan industri.';

        $misi = [
            'Menyelenggarakan pendidikan kejuruan berbasis kompetensi dan berorientasi pada dunia kerja.',
            'Membangun kerja sama aktif dengan dunia usaha dan dunia industri (DUDI).',
            'Menanamkan sikap disiplin, jujur, dan bertanggung jawab pada setiap peserta didik.',
            'Mengembangkan potensi siswa melalui kegiatan akademik dan non-akademik yang seimbang.',
        ];

        $sejarah = 'SMK Negeri 1 Cijati  adalah salah satu sekolah menengah keujuruan negeri di kabupaten cianjur,jawa barat,dengan nomor pokok sekolah nasional (NPSN)20252505.
        Profil SingkatAlamat: Jl. Raya Cijati, RT 06/RW 02, Desa Cijati, Kecamatan Cijati, Kabupaten Cianjur, Provinsi Jawa Barat.
        Status: Sekolah Negeri dengan akreditasi A.';

        $ekstrakurikuler = [
            'PRAMUKA',
            'PALANG MERAH REAMAJA',
            'CINEMAK',
            'PASKIBRA',
            'MARCHING BAND',
            'KARAWITAN',
            'BAHASA JEPANG',
            'FUTSAL BALL',
            'ROHIS',
            'VOLY BALL',
        ];

        $fasilitas = [
            'Laboratorium RPL',
            'Laboratorium PEM',
            'Laboratorium APHP',
            'Laboratorium TKR',
            'Unit Kesehatan Sekolah (UKS)',
            'Perpustaakan',
        ];

        return view('profil.index', compact('visi', 'misi', 'sejarah', 'ekstrakurikuler', 'fasilitas'));
    }
}
