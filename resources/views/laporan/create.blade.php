@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <div class="box">
        <h2>Form Pelaporan Banjir</h2>
        <p>Isi data berikut untuk melaporkan kejadian banjir di wilayah Anda.</p>

        @if ($errors->any())
            <x-alert type="danger">Terdapat kesalahan pada isian form. Silakan periksa kembali.</x-alert>
        @endif

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Asep Sunandar">
            @error('nama') <div class="error">{{ $message }}</div> @enderror

            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Dayeuhkolot, Kab. Bandung">
            @error('lokasi') <div class="error">{{ $message }}</div> @enderror

            <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" min="0" placeholder="Contoh: 45">
            @error('tinggi_genangan') <div class="error">{{ $message }}</div> @enderror

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection
