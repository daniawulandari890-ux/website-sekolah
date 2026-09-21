<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK Negeri 1 Cijati')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="site-header__inner">
            <a href="{{ route('home') }}" class="brand">
               <span class="brand__mark">
   <img src="{{ asset('images/logo.sekolah.jpeg') }}" alt="Logo SMK Negeri 1 Cijati" style="width: 40px; height: 40px; object-fit: contain;">
</span>
                <span class="brand__name">SMK Negeri 1<br>Cijati</span>
            </a>

            <button class="nav-toggle" id="navToggle" aria-label="Buka menu">
                <span></span><span></span><span></span>
            </button>

            <nav class="site-nav" id="siteNav">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Beranda</a>
                <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'is-active' : '' }}">Profil Sekolah</a>
                <a href="{{ route('kompetensi') }}" class="{{ request()->routeIs('kompetensi') ? 'is-active' : '' }}">Kompetensi Keahlian</a>
                <a href="{{ route('ekstrakurikuler') }}" class="{{ request()->routeIs('ekstrakurikuler') ? 'is-active' : '' }}">Ekstrakurikuler</a>
                <a href="{{ route('guru.index') }}" class="{{ request()->routeIs('guru.index') ? 'is-active' : '' }}">Data Guru</a>
                <a href="{{ route('berita') }}" class="{{ request()->routeIs('berita') ? 'is-active' : '' }}">Berita</a>
                @auth
                    <a href="{{ route('dashboard') }}" class="nav-cta">Dasbor</a>
                @else
                    <a href="{{ route('login') }}" class="nav-cta"></a>
                @endauth
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="site-footer__inner">
            <div class="site-footer__col">
                <span class="brand__name" style="color:#fff">SMK Negeri 1 Cijati</span>
                <p>Jl.Raya Cijati, RT 6/RW 2,Desa Cijati,Kecamatan Cijati,Kabupaten Cianjur,Provinsi Jawa Barat,Kode Pos 43284. Terakreditasi A sejak 2006.</p>
            </div>
            <div class="site-footer__col">
                <h4>Kontak</h4>
                <p>(021) 3067-8299</p>
                <p>info@smkn1cijati.sch.id</p>
            </div>
            <div class="site-footer__col">
                <h4>Jam Layanan</h4>
                <p>Senin – Jumat, 06.30 – 15.00</p>
            </div>
        </div>
        <div class="site-footer__bottom">
            © {{ date('Y') }} SMK 1 Negeri 1 Cijati. Seluruh hak cipta dilindungi.
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
