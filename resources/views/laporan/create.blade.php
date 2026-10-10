@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
<h2>Form Pelaporan Banjir</h2>

@if ($errors->any())
    <x-alert type="danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
@endif

<form action="{{ route('laporan.store') }}" method="POST">
    @csrf

    <div>
        <label for="nama_pelapor">Nama Pelapor</label>
        <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" required>
    </div>

    <div>
        <label for="lokasi">Lokasi (Kecamatan)</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>
    </div>

    <div>
        <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
        <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" min="1" required>
    </div>

    <div>
        <label for="tanggal_kejadian">Tanggal Kejadian</label>
        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}" required>
    </div>

    <button type="submit">Kirim Laporan</button>
</form>
@endsection