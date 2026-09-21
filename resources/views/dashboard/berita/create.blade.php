@extends('layouts.dashboard')

@section('title', 'Tambah Berita')

@section('content')

<div class="dash-panel">
    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p><label>Judul<br><input type="text" name="judul" value="{{ old('judul') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Tanggal<br><input type="date" name="tanggal" value="{{ old('tanggal') }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Isi<br><textarea name="isi" rows="6" style="width:100%;padding:8px;">{{ old('isi') }}</textarea></label></p>
        <p><label>Gambar<br><input type="file" name="gambar" accept="image/*"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Simpan</button>
        <a href="{{ route('admin.berita.index') }}" class="link-quiet">Batal</a>
    </form>
</div>

@endsection