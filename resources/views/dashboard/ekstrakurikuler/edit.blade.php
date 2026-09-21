@extends('layouts.dashboard')

@section('title', 'Edit Ekstrakurikuler')

@section('content')

<div class="dash-panel">
    <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p><label>Nama<br><input type="text" name="nama" value="{{ old('nama', $ekstrakurikuler->nama) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Kategori<br><input type="text" name="kategori" value="{{ old('kategori', $ekstrakurikuler->kategori) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Deskripsi<br><textarea name="deskripsi" rows="4" style="width:100%;padding:8px;">{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea></label></p>
        <p><label>Jadwal<br><input type="text" name="jadwal" value="{{ old('jadwal', $ekstrakurikuler->jadwal) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Pembina<br><input type="text" name="pembina" value="{{ old('pembina', $ekstrakurikuler->pembina) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Foto Saat Ini<br>
    @if ($ekstrakurikuler->foto)
        <img src="{{ asset('storage/' . $ekstrakurikuler->foto) }}" style="max-width:150px;display:block;margin-bottom:8px;">
    @else
        (belum ada foto)
    @endif
</label></p>
<p><label>Ganti Foto<br><input type="file" name="foto" accept="image/*"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Update</button>
        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="link-quiet">Batal</a>
    </form>
</div>

@endsection