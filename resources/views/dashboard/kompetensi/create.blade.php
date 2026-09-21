@extends('layouts.dashboard')

@section('title', 'Tambah Kompetensi Keahlian')

@section('content')

<div class="dash-panel">
    <form action="{{ route('admin.kompetensi.store') }}" method="POST">
        @csrf

        <p><label>Nama<br><input type="text" name="nama" value="{{ old('nama') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Deskripsi<br><textarea name="deskripsi" rows="4" style="width:100%;padding:8px;">{{ old('deskripsi') }}</textarea></label></p>
        <p><label>Mapel Konsentrasi<br><input type="text" name="mapel" value="{{ old('mapel') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Prospek Kerja<br><input type="text" name="prospek" value="{{ old('prospek') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Icon (contoh: fa-code)<br><input type="text" name="icon" value="{{ old('icon') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Warna (contoh: icon-red)<br><input type="text" name="warna" value="{{ old('warna') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Path Logo (contoh: images/logo_jurusan/logo-x.jpeg)<br><input type="text" name="logo" value="{{ old('logo') }}" style="width:100%;padding:8px;"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Simpan</button>
        <a href="{{ route('admin.kompetensi.index') }}" class="link-quiet">Batal</a>
    </form>
</div>

@endsection