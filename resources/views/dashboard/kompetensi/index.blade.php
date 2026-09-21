@extends('layouts.dashboard')

@section('title', 'Kompetensi Keahlian')

@section('content')

@if(session('success'))
    <div class="badge badge--hijau" style="margin-bottom:16px;display:inline-block;">{{ session('success') }}</div>
@endif

<div class="dash-panel">
    <div class="dash-panel__head">
        <h2>Kompetensi Keahlian</h2>
        <a href="{{ route('admin.kompetensi.create') }}" class="link-quiet">+ Tambah Kompetensi</a>
    </div>

    <table class="dash-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mapel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kompetensi as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->mapel }}</td>
                    <td>
                        <a href="{{ route('admin.kompetensi.edit', $item) }}" class="link-quiet">Edit</a>
                        &nbsp;|&nbsp;
                        <form action="{{ route('admin.kompetensi.destroy', $item) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
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