@extends('layouts.app')

@section('title', 'Berita — SMK Negeri 1 Cijati.')

@section('content')

    <section class="page-hero">
        <h1>Berita & Galeri</h1>
        <p>Kabar dan agenda terbaru seputar kegiatan SMK Negeri 1 Cijati.</p>
    </section>

    <section class="section">
        <div style="max-width:900px;margin:0 auto;padding:20px;">
            @foreach ($berita as $item)
                <article style="display:flex;gap:20px;align-items:flex-start;padding:20px 0;border-bottom:1px solid #e5e5e5;">
                    @if (!empty($item['gambar']))
                        <img src="{{ asset('storage/' . $item['gambar']) }}" alt="{{ $item['judul'] }}"
                             style="width:360px;height:230px;object-fit:cover;border-radius:8px;flex-shrink:0;">
                    @endif
                    <div>
                        <time style="font-size:14px;color:#6b8e6b;font-weight:600;">{{ $item['tanggal'] }}</time>
                        <h3 style="margin:6px 0;font-size:20px;">{{ $item['judul'] }}</h3>
                        <p style="color:#666;line-height:1.5;">{{ $item['ringkasan'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

@endsection