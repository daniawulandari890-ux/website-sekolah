@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<section class="page-header">
    <div class="container">
        <h1>Dashboard</h1>
        <p>Selamat datang kembali, {{ $user->name ?? 'Pengguna' }}!</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4 mb-4">
            @foreach ($ringkasan as $item)
            <div class="col-6 col-lg-3">
                <div class="statistik-card dashboard-card">
                    <i class="bi {{ $item['icon'] }}"></i>
                    <h3>{{ $item['jumlah'] }}</h3>
                    <p>{{ $item['label'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="dashboard-panel">
            <h4><i class="bi bi-person-circle"></i> Informasi Akun</h4>
            <table class="table table-borderless mb-0">
                <tr><th style="width:180px">Nama</th><td>: {{ $user->name ?? '-' }}</td></tr>
                <tr><th>Email</th><td>: {{ $user->email ?? '-' }}</td></tr>
            </table>
        </div>

        <div class="dashboard-panel mt-4">
            <h4><i class="bi bi-list-check"></i> Menu Pengelolaan</h4>
            <p class="text-muted">Silakan lengkapi modul pengelolaan berita, galeri, data guru, dan lainnya sesuai kebutuhan sekolah.</p>
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="btn btn-hero-outline"><i class="bi bi-newspaper"></i> Kelola Berita</a>
                <a href="#" class="btn btn-hero-outline"><i class="bi bi-images"></i> Kelola Galeri</a>
                <a href="#" class="btn btn-hero-outline"><i class="bi bi-person-badge"></i> Kelola Data Guru</a>
            </div>
        </div>
    </div>
</section>

@endsection
