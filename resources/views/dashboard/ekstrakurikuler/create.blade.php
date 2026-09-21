@extends('layouts.dashboard')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')

<div class="dash-panel">
    <form action="{{ route('admin.ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p><label>Nama<br><input type="text" name="nama" value="{{ old('nama') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Kategori<br><input type="text" name="kategori" value="{{ old('kategori') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Deskripsi<br><textarea name="deskripsi" rows="4" style="width:100%;padding:8px;">{{ old('deskripsi') }}</textarea></label></p>
        <p><label>Jadwal<br><input type="text" name="jadwal" value="{{ old('jadwal') }}" placeholder="contoh: Setiap Jumat, 15.00-17.00" style="width:100%;padding:8px;"></label></p>
        <p><label>Pembina<br><input type="text" name="pembina" value="{{ old('pembina') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Foto<br><input type="file" name="foto" accept="image/*"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Simpan</button>
        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="link-quiet">Batal</a>
    </form>
</div>

@endsection