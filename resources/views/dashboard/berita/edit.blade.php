@extends('layouts.dashboard')

@section('title', 'Edit Berita')

@section('content')

<div class="dash-panel">
    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <p><label>Judul<br><input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Tanggal<br><input type="date" name="tanggal" value="{{ old('tanggal', $berita->tanggal) }}" style="width:100%;padding:8px;"></label></p>
        <p><label>Isi<br><textarea name="isi" rows="6" style="width:100%;padding:8px;">{{ old('isi', $berita->isi) }}</textarea></label></p>

        <p><label>Gambar Saat Ini<br>
            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" style="max-width:150px;display:block;margin-bottom:8px;">
            @else
                (belum ada gambar)
            @endif
        </label></p>
        <p><label>Ganti Gambar<br><input type="file" name="gambar" accept="image/*"></label></p>

        @if ($errors->any())
            <ul style="color:#B3413E;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" style="padding:10px 20px;background:var(--navy);color:#fff;border:none;border-radius:6px;">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="link-quiet">Batal</a>
    </form>
</div>

@endsection