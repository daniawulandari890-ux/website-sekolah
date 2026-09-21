<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiKeahlianSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kompetensi_keahlians')->insert([
            ['nama' => 'Rekayasa Perangkat Lunak (RPL)', 'deskripsi' => 'Peminatan bagi siswa yang tertarik mendalami dunia it, ngoding, dan perangkat lunak,software.', 'mapel' => 'Konsentrasi Rekayasa Perangkat Lunak,Informatika', 'prospek' => 'Programmer, Teknologi informasi, informatika', 'icon' => 'fa-code', 'warna' => 'icon-red', 'logo' => 'images/logo_jurusan/logo-pplg.jpeg', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Pemasaran(PEM)', 'deskripsi' => 'Peminatan bagi siswa yang tertarik memahami mengeksekusi strategi untuk memasarkan produk atau layanan kepada konsumen, branding & komunikasi bisnis,.', 'mapel' => 'Konsentrasi Bisnis Digital,Manajemen Perusahaan,Kewirausahaan', 'prospek' => 'Negosiasi, Strategi pemasaran, digital marketing', 'icon' => 'fa-bullhorn', 'warna' => 'icon-blue', 'logo' => 'images/logo_jurusan/logo-pemasaran.jpeg', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Agribisnis Pengolahan Hasil Pertanian (APHP)', 'deskripsi' => 'Peminatan bagi siswa yang tertarik cara mengelola bahan mentah hasil pertanian,.', 'mapel' => 'Konsentrasi Agribisnis Pengolahan Hasil Pertanian', 'prospek' => 'quality control,agroindustri,tenaga ahli pengolahan pangan', 'icon' => 'fa-leaf', 'warna' => 'icon-yellow', 'logo' => 'images/logo_jurusan/logo-aphp.jpeg', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Teknik Kendaraan Ringan (TKR)', 'deskripsi' => 'Peminatan lintas minat bagi siswa yang tertarik pada pemrograman, desain, dan produk digital.', 'mapel' => 'Konsentrasi Teknik Kendaraan Ringan,Perawatan Sasis Kendaraan Ringan', 'prospek' => 'Mekanik,service advisor,maerketing otomotif', 'icon' => 'fa-car', 'warna' => 'icon-green', 'logo' => 'images/logo_jurusan/logo-tkr.jpeg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}