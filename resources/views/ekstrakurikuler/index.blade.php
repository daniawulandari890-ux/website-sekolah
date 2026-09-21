@extends('layouts.app')

@section('title', 'Ekstrakurikuler — SMK Negeri 1 Cijati')

@section('content')

    <section class="page-hero">
        <h1>Ekstrakurikuler</h1>
        <p>Ruang bagi siswa mengembangkan minat di luar kelas, dari sains hingga seni dan olahraga.</p>
    </section>

    <section class="section">
        <div class="ekskul-grid">
            @foreach ($ekstrakurikuler as $item)
                @php
 $icons = [
        'Kepramukaan & Kedisiplinan' => '🧭',
        'Kesehatan' => '➕',
        'Dokumentasi,Desain & Publikasi' => '🎬',
        'Kepemimpinan' => '🚩',
        'Musik' => '🎵',
        'Seni & Budaya' => '🎭',
    ];
    $icon = $icons[$item['kategori']] ?? '⭐';
@endphp
<article class="ekskul-card">
    @if (!empty($item['foto']))
        <img src="{{ asset('storage/' . $item['foto']) }}" alt="{{ $item['nama'] }}" style="width:100%;border-radius:8px;margin-bottom:10px;object-fit:cover;max-height:160px;">
    @else
        <span class="ekskul-card__icon">{{ $icon }}</span>
    @endif
    <span class="ekskul-card__kategori">{{ $item['kategori'] }}</span>
    <h3>{{ $item['nama'] }}</h3>
                    <p>{{ $item['deskripsi'] }}</p>
                    <dl class="ekskul-card__meta">
                        <div>
                            <dt>Jadwal</dt>
                            <dd>{{ $item['jadwal'] }}</dd>
                        </div>
                        <div>
                            <dt>Pembina</dt>
                            <dd>{{ $item['pembina'] }}</dd>
                        </div>
                    </dl>
                </article>
            @endforeach
        </div>
    </section>

@endsection
