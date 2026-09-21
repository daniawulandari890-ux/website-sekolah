@extends('layouts.dashboard')

@section('title', 'Berita')

@section('content')

@if(session('success'))
    <div class="badge badge--hijau" style="margin-bottom:16px;display:inline-block;">{{ session('success') }}</div>
@endif

<div class="dash-panel">
    <div class="dash-panel__head">
        <h2>Berita</h2>
        <a href="{{ route('admin.berita.create') }}" class="link-quiet">+ Tambah Berita</a>
    </div>

    <table class="dash-table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $item)
                <tr>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $item) }}" class="link-quiet">Edit</a>
                        &nbsp;|&nbsp;
                        <form action="{{ route('admin.berita.destroy', $item) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-quiet" style="border:none;background:none;cursor:pointer;color:#B3413E;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection