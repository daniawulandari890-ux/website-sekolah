<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dasbor') — smkn1cijati</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body class="dashboard">

    <div class="dash-shell">
        <aside class="dash-sidebar" id="dashSidebar">
            <div class="dash-sidebar__brand">
                <span class="brand__mark brand__mark--light">SMK</span>
                <span>smkn1cijati</span>
            </div>

            <nav class="dash-nav">
                <a href="{{ route('dashboard') }}" class="is-active">Ringkasan</a>
                <a href="{{ route ('siswa') }}">Data Siswa</a>
                <a href="{{ route('admin.guru.index') }}">Data Guru</a>
                <a href="{{ route('admin.profil.edit') }}">Profil Sekolah</a>
                <a href="{{ route('admin.berita.index') }}">Berita</a>
                <a href="{{ route('admin.ekstrakurikuler.index') }}">Ekstrakurikuler</a>
                <a href="{{ route('admin.kompetensi.index') }}">Kompetensi Keahlian</a>
                <a href="{{ route('pengumuman')}}">Pengumuman</a>
                <a href="{{ route('pengaturan')}}">Pengaturan</a>
            </nav>

            <form action="{{ route('logout') }}" method="POST" class="dash-sidebar__logout">
                @csrf
                <button type="submit">Keluar</button>
            </form>
        </aside>

        <div class="dash-main">
            <header class="dash-topbar">
                <button class="dash-topbar__toggle" id="sidebarToggle" aria-label="Buka menu">☰</button>
                <h1>@yield('title', 'Ringkasan')</h1>
                <div class="dash-topbar__user">
                    <span>{{ $user->name ?? 'Admin' }}</span>
                    <span class="dash-topbar__avatar">{{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}</span>
                </div>
            </header>

            <main class="dash-content">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
