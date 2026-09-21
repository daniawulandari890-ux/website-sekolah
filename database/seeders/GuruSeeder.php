<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gurus')->insert([
            ['nama' => 'A Rahmat Dimyati, S.PD.M.PD.', 'mapel' => 'Kepala Sekolah', 'inisial' => 'ARD', 'foto' => 'kepala-sekolah.jpg', 'urutan' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Didi Mei Somatri,S.KOM.', 'mapel' => 'Guru RPL', 'inisial' => 'DMS', 'foto' => 'images/guru/01_Didi_Mei_Somatri_S.Kom.png', 'urutan' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Budiana Hermawan,S.TP.', 'mapel' => 'Guru APHP', 'inisial' => 'BH', 'foto' => 'images/guru/02_Budiana_Hermawan_S.TP.png', 'urutan' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Edeh Kurniasih,S.PD.', 'mapel' => 'Guru B.Indonesia', 'inisial' => 'EK', 'foto' => 'images/guru/03_Edeh_Kurniasih_S.Pd.png', 'urutan' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Romi Darmayadi,S.PD.,S.T.', 'mapel' => 'GURU TKR', 'inisial' => 'RD', 'foto' => 'images/guru/04_Romi_Darmayadi_S.Pd._S.T.png', 'urutan' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Eli Maryamah,S.PD.', 'mapel' => 'Guru Pemasaran', 'inisial' => 'EM', 'foto' => 'images/guru/05_Eli_Maryamah_S.Pd.png', 'urutan' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Nanang Suryana,SE.,M.M.', 'mapel' => 'Guru Pemasaran', 'inisial' => 'NS', 'foto' => 'images/guru/06_Nanang_Suryana_S.E._M.M.png', 'urutan' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Indra Priatna,S.PD.', 'mapel' => 'Guru PP & Informatika', 'inisial' => 'IP', 'foto' => 'images/guru/07_Indra_Priatna_S.Pd.png', 'urutan' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Indra Murgianto,S.PD.', 'mapel' => 'Guru Pemasaran ', 'inisial' => 'IM', 'foto' => 'images/guru/08_Indra_Murgianto_S.Pd.png', 'urutan' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Dedi Sukardi,S.PD.', 'mapel' => 'Guru PJOK', 'inisial' => 'DS', 'foto' => 'images/guru/09_Dedi_Sukardi_S.Pd.png', 'urutan' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Nuraeni,S.PD.', 'mapel' => 'Guru Matematika', 'inisial' => 'N', 'foto' => 'images/guru/10_Nuraeni_S.Pd.png', 'urutan' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Ela Haryatai,S.Pd.', 'mapel' => 'Guru PP & PKK', 'inisial' => 'EH', 'foto' => 'images/guru/11_Ela_Haryati_S.Pd.png', 'urutan' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Habib Suhandar,S.PD.', 'mapel' => 'Guru PP & Sejarah', 'inisial' => 'HS', 'foto' => 'images/guru/12_Habib_Suhandar_S.Pd.png', 'urutan' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Nopi Yanti,S.PD.', 'mapel' => 'Guru PP & Sejarah', 'inisial' => 'NY', 'foto' => 'images/guru/13_Nopi_Yanti_S.Pd.png', 'urutan' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Jaya Nur Setiawandi,S.PD.', 'mapel' => 'Guru PJOK & B.Sunda', 'inisial' => 'JNS', 'foto' => 'images/guru/14_Jaya_Nur_Setiawandi_S.Pd.png', 'urutan' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Setiawan,S.E.', 'mapel' => 'GURU Pemasaran', 'inisial' => 'S', 'foto' => 'images/guru/15_Setiawan_S.E.png', 'urutan' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Dini Andriyani,S.E.', 'mapel' => 'Guru Pemasaran', 'inisial' => 'DA', 'foto' => 'images/guru/16_Dini_Andriani_S.E.png', 'urutan' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Emi Resmiyati.,S.PD.', 'mapel' => 'Guru Ipas', 'inisial' => 'ER', 'foto' => 'images/guru/17_Emi_Resmiyati_S.Pd.png', 'urutan' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Rina Susana,S.PD.', 'mapel' => 'Guru B.inggris', 'inisial' => 'RS', 'foto' => 'images/guru/18_Rina_Susana_S.Pd.png', 'urutan' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Jajang Ridwan,S.T.', 'mapel' => 'Guru TKR ', 'inisial' => 'JR', 'foto' => 'images/guru/19_Jajang_Ridwan_S.T.png', 'urutan' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Yani Cahyani,S.PD.', 'mapel' => 'Guru B.Inggris', 'inisial' => 'YC', 'foto' => 'images/guru/20_Yani_Cahyani_S.Pd.png', 'urutan' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Mega Nurunnisa,S.PD.', 'mapel' => 'Guru B.Indonesia & Seni Budaya', 'inisial' => 'MN', 'foto' => 'images/guru/21_Mega_Nurunnisa_S.Pd.png', 'urutan' => 22, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Mia Rusmiati,S.Pd.', 'mapel' => 'Guru Matematik & B.Inggris', 'inisial' => 'MR', 'foto' => 'images/guru/22_Mia_Rusmiati_S.Pd.png', 'urutan' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Silvi Danu Respita,S.T.', 'mapel' => 'Guru RPL', 'inisial' => 'SDR', 'foto' => 'images/guru/23_Silvi_Danu_Respita_S.T.png', 'urutan' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Siti Rahmawati,S.PD.I.', 'mapel' => 'Guru PAIBP', 'inisial' => 'SR', 'foto' => 'images/guru/24_Siti_Rahmawati_S.Pd.I.png', 'urutan' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Ai Nurhasanah,S.PD.', 'mapel' => 'Guru Matematika & Informatika', 'inisial' => 'AN', 'foto' => 'images/guru/25_Ai_Nurhasanah_S.Pd.png', 'urutan' => 26, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Isnan Wiranursyeha,S.PD.', 'mapel' => 'GURU B.Indonesia', 'inisial' => 'IW', 'foto' => 'images/guru/26_Isnan_Wiranursyeha_S.Pd.png', 'urutan' => 27, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Bani Fudoly,S.ST.', 'mapel' => 'Guru RPL', 'inisial' => 'BF', 'foto' => 'images/guru/27_Rina_Susana_S.Pd._-_PPLG.png', 'urutan' => 28, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Asep Muhlis Sulaeman,S.PD.I.', 'mapel' => 'Guru PAIBP', 'inisial' => 'AMS', 'foto' => 'images/guru/28_Asep_Muhlis_Sulaeman_S.Pd.I.png', 'urutan' => 29, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Yayup Hindriyani,S.PD.', 'mapel' => 'Guru Informatika & Matematika', 'inisial' => 'YH', 'foto' => 'images/guru/29_Yayup_Hindriyani_S.Pd.png', 'urutan' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Wahyudin,S.TR.KOM.', 'mapel' => 'Guru RPL ', 'inisial' => 'W', 'foto' => 'images/guru/30_Wahyudin_S.Tr.Kom.png', 'urutan' => 31, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Kamalia,S.E.', 'mapel' => 'Guru Pemasaran', 'inisial' => 'K', 'foto' => 'images/guru/31_Kamalia_S.E.png', 'urutan' => 32, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Andri Muhoir,ST.', 'mapel' => 'Guru TKR', 'inisial' => 'AM', 'foto' => 'images/guru/32_Andri_Muhoir_S.T.png', 'urutan' => 33, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Moch Yoga Agung Nugraha,S.Pd.M.PD.', 'mapel' => 'Guru B.Sunda', 'inisial' => 'MYAN', 'foto' => 'images/guru/33_Moch._Yoga_Agung_N._S.Pd._M.Pd.png', 'urutan' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Rahmat Setiawan,S.T.', 'mapel' => 'Guru RPL', 'inisial' => 'RS', 'foto' => 'images/guru/34_Rahmat_Setiawan_S.T.png', 'urutan' => 35, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Ende Iskandar,S.TP.', 'mapel' => 'Guru APHP', 'inisial' => 'EI', 'foto' => 'images/guru/35_Ende_Iskandar_S.TP.png', 'urutan' => 36, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Sima Kristina,S.KOM.', 'mapel' => 'Adm Keuangan & Publikasi', 'inisial' => 'SK', 'foto' => 'images/guru/37_Sima_Kristina_S.Kom.png', 'urutan' => 37, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Nurdiansah,S.IP.', 'mapel' => 'Adm Persuratan Kesiswaan & Kurikulum', 'inisial' => 'N', 'foto' => 'images/guru/36_Nurdiansah_S.IP.png', 'urutan' => 38, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Sakti Alamsyah,SE.', 'mapel' => 'Adm Sarpras', 'inisial' => 'SA', 'foto' => 'images/guru/38_Sakti_Alamsyah_S.E.png', 'urutan' => 39, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Ai Suryati, A.MA.PUST.', 'mapel' => 'Adm Perpustakaan', 'inisial' => 'AS', 'foto' => 'images/guru/39_Ayi_Suryati_A.MA.Pust.png', 'urutan' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Nurah Alwaini, A.MA.PUST.', 'mapel' => 'Adm Perpustakaan', 'inisial' => 'NA', 'foto' => 'images/guru/40_Nurah_Alwaini_A.MA.Pust.png', 'urutan' => 41, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Ramdan Bastaman', 'mapel' => 'Adm Sarpras ', 'inisial' => 'RB', 'foto' => 'images/guru/41_Ramdan_Bastaman.png', 'urutan' => 42, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Saripul Basar', 'mapel' => 'Laboran APHP', 'inisial' => 'SB', 'foto' => 'images/guru/42_Saripul_Basar.png', 'urutan' => 43, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'BPK Asep Purnama', 'mapel' => 'Laboran TKR', 'inisial' => 'AP', 'foto' => 'images/guru/43_Asep_Purnama.png', 'urutan' => 44, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ibu Santi Mustika', 'mapel' => 'Laboran Pemasaran', 'inisial' => 'SM', 'foto' => 'images/guru/44_Santi_Mustika.png', 'urutan' => 45, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Moch Najib', 'mapel' => 'Laboran RPL', 'inisial' => 'MN', 'foto' => 'images/guru/45_Moch_Najib.png', 'urutan' => 46, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Ahmad Suhendra', 'mapel' => 'Kebersihan Sekolah', 'inisial' => 'AS', 'foto' => 'images/guru/46_Ahmad_Suhendra.png', 'urutan' => 47, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk D Jamaludin', 'mapel' => 'Kebersihan Sekolah', 'inisial' => 'DJ', 'foto' => 'images/guru/47_D_Jamaludin.png', 'urutan' => 48, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Apendi', 'mapel' => 'Kebersihan Sekolah', 'inisial' => 'A', 'foto' => 'images/guru/48_Apendi.png', 'urutan' => 49, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Tatang Rustandi', 'mapel' => 'Kebersihan Sekolah', 'inisial' => 'TR', 'foto' => 'images/guru/49_Tatang_Rustandi.png', 'urutan' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Muldiansah', 'mapel' => 'Keamanan Sekolah', 'inisial' => 'M', 'foto' => 'images/guru/50_Muldiansah.png', 'urutan' => 51, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bpk Yogi Saputra', 'mapel' => 'Keamanan Sekolah', 'inisial' => 'YS', 'foto' => 'images/guru/51_Yogi_Saputra.png', 'urutan' => 52, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}