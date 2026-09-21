@extends('layouts.app')

@section('title', 'Beranda — SMK Negeri 1 Cijati')

@section('content')

    <section class="hero">
        <div class="hero__inner">
        <div class="hero__content">
            <p class="hero__eyebrow">Terakreditasi {{ $sekolah['akreditasi'] }} · Berdiri sejak {{ $sekolah['tahun_berdiri'] }}</p>
            <h1 class="hero__title">SMK Negeri 1 Cijati</h1>
            <p class="hero__desc">
                {{ $sekolah['nama'] }} membentuk siswa untuk bertanya, meneliti, dan membangun —
                bukan sekadar menghafal untuk ujian.
            </p>
            <div class="hero__actions">
                <a href="{{ route('profil') }}" class="btn btn-gold">Kenali Sekolah Kami</a>
                <a href="{{ route('login') }}" class="btn btn-outline-light">Masuk Portal</a>
            </div>
        </div>

        <div class="hero__stats">
            <div class="stat-block">
                <span class="stat-block__num">{{ $sekolah['jumlah_siswa'] }}</span>
                <span class="stat-block__label">Siswa aktif</span>
            </div>
            <div class="stat-block">
                <span class="stat-block__num">{{ $sekolah['jumlah_guru'] }}</span>
                <span class="stat-block__label">Tenaga pengajar</span>
            </div>
            <div class="stat-block">
                <span class="stat-block__num">{{ date('Y') - $sekolah['tahun_berdiri'] }}</span>
                <span class="stat-block__label">Tahun mendidik</span>
            </div>
        </div>
</div>
    </section>
    <section class="section">
    <div class="sambutan">
        <div class="sambutan__foto">
            <img src="{{ asset('images/kepala-sekolah.jpg') }}" alt="Kepala Sekolah">
        </div>
        <div class="sambutan__teks">
            <p class="sambutan__label">Sambutan Kepala Sekolah</p>
            <h2 class="sambutan__nama">Bpk A Rahmat Dimyati, S.Pd., M.Pd.</h2>
            <p class="sambutan__isi">
                Assalamu'alaikum Warahmatullahi Wabarakatuh.
Puji syukur kita panjatkan ke hadirat Allah SWT atas limpahan rahmat dan karunia-Nya, sehingga SMK Negeri 1 Cijati terus berkembang sebagai lembaga pendidikan vokasi yang unggul, berdaya saing, dan berorientasi pada kemajuan teknologi serta kebutuhan dunia kerja.
Website ini kami hadirkan sebagai sarana informasi dan komunikasi bagi seluruh warga sekolah, orang tua, mitra dunia usaha/dunia industri (DU/DI), serta masyarakat luas. Kehadiran platform ini diharapkan dapat memberikan akses yang lebih mudah terhadap informasi akademik, kegiatan sekolah, prestasi siswa, serta berbagai program unggulan yang kami jalankan.
Sebagai lembaga pendidikan vokasi, SMK Negeri 1 Cijati berkomitmen dan bertekad mencetak lulusan yang tidak hanya kompeten di bidangnya, tetapi juga berkarakter luhur, kreatif, dan berdaya saing global. Tentu saja, visi besar ini hanya dapat terwujud dengan adanya dukungan penuh dan sinergi dari seluruh tenaga pendidik, kependidikan, peserta didik, orang tua, serta mitra industri.
Semoga website ini dapat memberikan manfaat yang luas bagi kemajuan kita semua dan perkembangan dunia pendidikan.Terima kasih.Wassalamu'alaikum Warahmatullahi Wabarakatuh.
            </p>
        </div>
    </div>
</section>

    <section class="section">
        <div class="section__head">
            <h2>Program Unggulan</h2>
            <p>Tiga arah pembelajaran yang membedakan cara kami mendidik.</p>
        </div>

        <div class="program-grid">
            @foreach ($program as $item)
                <article class="program-card">
                    <h3>{{ $item['judul'] }}</h3>
                    <p>{{ $item['deskripsi'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section section--muted">
        <div class="section__head">
            <h2>Pengumuman Terbaru</h2>
            <p>Informasi terkini seputar kegiatan dan agenda sekolah.</p>
        </div>

        <div class="berita-list">
            @foreach ($berita as $item)
                <article class="berita-item">
                    <time>{{ $item['tanggal'] }}</time>
                    <div>
                        <h3>{{ $item['judul'] }}</h3>
                        <p>{{ $item['ringkasan'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

@endsection
