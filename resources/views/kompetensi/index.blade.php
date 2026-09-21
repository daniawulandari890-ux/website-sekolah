@extends('layouts.app')

@section('title', 'Kompetensi Keahlian — SMK Negeri 1 Cijati.')

@section('content')

    <section class="page-hero">
        <h1>Kompetensi Keahlian</h1>
        <p>Peminatan yang membantu siswa mengarahkan minat dan kekuatan akademiknya sejak kelas X.</p>
    </section>

    <section class="section">
        <div class="prodi-grid">
            @foreach ($kompetensi as $item)
                <div class="prodi-item">
                    <div class="prodi-icon {{ $item['warna'] }}">
                       <img src="{{ asset($item['logo']) }}" alt="{{ $item['nama'] }}">
                    </div>
                    <h3>{{ $item['nama'] }}</h3>
                    <p>{{ $item['deskripsi'] }}</p>

                    <h4>Mata Pelajaran Unggulan</h4>
                    <ul class="tag-list">
                        @foreach ($item['mapel'] as $mapel)
                            <li>{{ $mapel }}</li>
                        @endforeach
                    </ul>

                    <h4>Prospek Lanjutan</h4>
                    <p class="kompetensi-card__prospek">{{ $item['prospek'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection