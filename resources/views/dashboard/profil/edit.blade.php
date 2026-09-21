@extends('layouts.dashboard')

@section('title', 'Profil Sekolah')

@section('content')

@if(session('success'))
    <div class="badge badge--hijau" style="margin-bottom:16px;display:inline-block;">{{ session('success') }}</div>
@endif

<div class="dash-panel">
    <div class="dash-panel__head">
        <h2>Profil Sekolah</h2>
    </div>

    <form action="{{ route('admin.profil.update') }}" method="POST">
        @csrf
        @method('PUT')

        <p><label>Nama Sekolah<br><input type="text" name="nama" value="{{ old('nama', $profil->nama) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Akreditasi<br><input type="text" name="akreditasi" value="{{ old('akreditasi', $profil->akreditasi) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Tahun Berdiri<br><input type="number" name="tahun_berdiri" value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Jumlah Siswa<br><input type="number" name="jumlah_siswa" value="{{ old('jumlah_siswa', $profil->jumlah_siswa) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Jumlah Guru<br><input type="number" name="jumlah_guru" value="{{ old('jumlah_guru', $profil->jumlah_guru) }}" style="width:100%;padding:8px;"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Simpan</button>
    </form>
</div>

@endsection