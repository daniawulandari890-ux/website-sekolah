@extends('layouts.app')

@section('title', 'Profil Sekolah — SMK Negeri 1 Cijati.')

@section('content')

    <section class="page-hero">
        <h1>Profil Sekolah</h1>
        <p>Mengenal lebih dekat sejarah, arah, dan fasilitas SMK Negeri 1 Cijati.</p>
    </section>

    <section class="section">
        <div class="split">
            <div class="split__text">
                <h2>Sejarah</h2>
                <p>{{ $sejarah }}</p>
            </div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="visi-misi">
            <div class="visi-misi__visi">
                <h2>Visi</h2>
                <p>{{ $visi }}</p>
            </div>
            <div class="visi-misi__misi">
                <h2>Misi</h2>
                <ol>
                    @foreach ($misi as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section__head">
            <h2>Fasilitas</h2>
        </div>
        <ul class="tag-list">
            @foreach ($fasilitas as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

    <section class="section section--muted">
        <div class="section__head">
            <h2>Ekstrakurikuler</h2>
        </div>
        <ul class="tag-list tag-list--gold">
            @foreach ($ekstrakurikuler as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

@endsection
