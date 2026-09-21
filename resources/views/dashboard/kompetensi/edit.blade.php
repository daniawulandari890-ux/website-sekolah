@extends('layouts.dashboard')

@section('title', 'Edit Kompetensi Keahlian')

@section('content')

<div class="dash-panel">
    <form action="{{ route('admin.kompetensi.update', $kompetensi) }}" method="POST">
        @csrf
        @method('PUT')

        <p><label>Nama<br><input type="text" name="nama" value="{{ old('nama', $kompetensi->nama) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Deskripsi<br><textarea name="deskripsi" rows="4" style="width:100%;padding:8px;">{{ old('deskripsi', $kompetensi->deskripsi) }}</textarea></label></p>
        <p><label>Mapel Konsentrasi<br><input type="text" name="mapel" value="{{ old('mapel', $kompetensi->mapel) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Prospek Kerja<br><input type="text" name="prospek" value="{{ old('prospek', $kompetensi->prospek) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Icon<br><input type="text" name="icon" value="{{ old('icon', $kompetensi->icon) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Warna<br><input type="text" name="warna" value="{{ old('warna', $kompetensi->warna) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Path Logo<br><input type="text" name="logo" value="{{ old('logo', $kompetensi->logo) }}" style="width:100%;padding:8px;"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Update</button>
        <a href="{{ route('admin.kompetensi.index') }}" class="link-quiet">Batal</a>
    </form>
</div>

@endsection