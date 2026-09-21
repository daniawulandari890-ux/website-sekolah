@extends('layouts.app')

@section('title', 'Data Guru — SMK Negeri 1 Cijati ')

@section('content')

    <section class="page-hero">
        <h1>Data Guru</h1>
        <p>Tenaga pengajar SMK Negeri 1 Cijati yang berdedikasi membimbing siswa di setiap bidang.</p>
    </section>

    <section class="section">
        <div class="guru-grid">
            @foreach ($gurus as $item)
                <article class="guru-card">
                    <span class="guru-card__avatar">
                        @if (!empty($item['foto']) && file_exists(public_path($item['foto'])))
                            <img src="{{ asset($item['foto']) }}" alt="{{ $item['nama'] }}">
                        @else
                            {{ $item['inisial'] }}
                        @endif
                    </span>
                    <h3>{{ $item['nama'] }}</h3>
                    <p>{{ $item['mapel'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

@endsection
