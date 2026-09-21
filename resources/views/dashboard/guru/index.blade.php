@extends('layouts.dashboard')

@section('title', 'Data Guru')

@section('content')

    <div class="dash-panel">
        <h1>Data Guru</h1>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <a href="{{ route('admin.guru.create') }}" style="display:inline-block;margin-bottom:15px;padding:8px 16px;background:#333;color:#fff;">
            + Tambah Guru
        </a>

        <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Urutan</th>
                    <th>Nama</th>
                    <th>Mapel / Jabatan</th>
                    <th>Inisial</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($guru as $item)
                    <tr>
                        <td>{{ $item->urutan }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->mapel }}</td>
                        <td>{{ $item->inisial }}</td>
                        <td>
                            <a href="{{ route('admin.guru.edit', $item) }}">Edit</a>
                            |
                            <form action="{{ route('admin.guru.destroy', $item) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none;border:none;color:red;cursor:pointer;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada data guru.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection