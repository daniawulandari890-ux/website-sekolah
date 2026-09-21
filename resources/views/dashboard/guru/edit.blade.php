@extends('layouts.dashboard')

@section('title', 'Edit Guru')

@section('content')

    <div class="dash-panel">
        <form action="{{ route('admin.guru.update', $guru) }}" method="POST">
            @csrf
            @method('PUT')

            <p><label>Nama<br><input type="text" name="nama" value="{{ old('nama', $guru->nama) }}" style="width:100%;padding:8px;"></label></p>
            <p><label>Mapel / Jabatan<br><input type="text" name="mapel" value="{{ old('mapel', $guru->mapel) }}" style="width:100%;padding:8px;"></label></p>
            <p><label>Inisial<br><input type="text" name="inisial" value="{{ old('inisial', $guru->inisial) }}" style="width:100%;padding:8px;"></label></p>
            <p><label>Path Foto<br><input type="text" name="foto" value="{{ old('foto', $guru->foto) }}" style="width:100%;padding:8px;"></label></p>
            <p><label>Urutan<br><input type="number" name="urutan" value="{{ old('urutan', $guru->urutan) }}" style="width:100%;padding:8px;"></label></p>

            @if ($errors->any())
                <ul style="color:#B3413E;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:4px;cursor:pointer;">Perbarui</button>
            <a href="{{ route('admin.guru.index') }}" class="link-quiet">Batal</a>
        </form>
    </div>

@endsection