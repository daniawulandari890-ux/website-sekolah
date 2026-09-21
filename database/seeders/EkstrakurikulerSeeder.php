<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ekstrakurikulers')->insert([
            ['nama' => 'PRAMUKA', 'kategori' => 'Kepramukaan & Kedisiplinan', 'deskripsi' => 'Melatih Kedisiplinan & Tanggung Jawab,  melatih baris-berbaris,melatih tali temali.', 'jadwal' => 'jumat, 12.45 – 15.00', 'pembina' => 'Bpk Moch Najib', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'PALANG MERAH REMAJA', 'kategori' => 'Kesehatan', 'deskripsi' => 'Melatih Pertolongan Pertama,Melatih tandu,Memberikan Pertolongan Pertama.', 'jadwal' => 'Selasa, 15.00 – 17.00', 'pembina' => 'Ibu Mega Nurunnisa, S.Pd.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'CINEMAK', 'kategori' => 'Dokumentasi,Desain & Publikasi', 'deskripsi' => 'Melatih pengoprasian kamera,melatih editing video dan teknik pengambilan gambar.', 'jadwal' => 'Jumat, 12.00 –12.45', 'pembina' => 'Bpk Rahmat Setiawan, S.T.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'PASKIBRA', 'kategori' => 'Kepemimpinan', 'deskripsi' => 'Melatih peraturan baris-berbaris hingga variasi formasi,melatih kekompakan tim dalam formasi & kedisiplinan gerak dan ketepatan langkah.', 'jadwal' => 'Rabu, 15.30 – 17.00', 'pembina' => 'Bpk Ende Iskandar, S.TP.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'MARCHING BAND', 'kategori' => 'Musik', 'deskripsi' => 'Melatih bermnain alat musik seperti,pianika,snare drum,bellyra & membaca notasi musik.', 'jadwal' => 'Sabtu, 08.00 – 12.00', 'pembina' => 'Ibu Nurah Alwaini,A.MA.PUST.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'KARAWITAN', 'kategori' => 'Seni & Budaya', 'deskripsi' => 'Melatih memainkan alat gamelan seperti,gamelan,kendang,melatih jurus dasar & tarian.', 'jadwal' => 'Rabu, 15.00 – 16.00', 'pembina' => 'Bpk Moch Yoga Agung Nugraha,S.Pd.M.PD.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'BAHASA JEPANG', 'kategori' => 'Bahasa', 'deskripsi' => 'Melatih keterampilan berbahasa asing,pemahaman budaya,serta pengembangan kreativitas.', 'jadwal' => 'Sabtu, 15.00 – 11.00', 'pembina' => 'Bpk Saripul Basar', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'FUTSAL BALL', 'kategori' => 'Olahraga & Kebugaran', 'deskripsi' => 'Melatih keterampilan teknik olahraga,kerja sama tim,kedisiplinan,serta kebugaran jasmani.', 'jadwal' => 'Rabu-Kamis, 15.00 – 17.00', 'pembina' => 'Bpk Jaya Nur Setiawandi,S.PD.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'ROHIS', 'kategori' => 'Keagamaan', 'deskripsi' => 'Melatih pemahaman agama,memperdalam ilmu agama tentang akidah,akhlak.', 'jadwal' => 'Kamis, 15.00 – 16.00', 'pembina' => 'Bpk Asep Muhlis Sulaiman,S.PD.I.', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'VOLY BALL', 'kategori' => 'Olahraga & Kebugaran', 'deskripsi' => 'Melatih kebugaran fisik,keterampilan teknis agama,kerja sama tim,dan ketanahan mental para siswa.', 'jadwal' => 'Senin-selasa, 15.00 – 17.30', 'pembina' => 'Bpk Dedi Sukardi,S.PD.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}