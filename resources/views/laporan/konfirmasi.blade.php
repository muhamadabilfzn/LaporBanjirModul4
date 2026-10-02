@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success">
        <strong>Berhasil!</strong> Laporan banjir Anda telah dikirim. Terima kasih telah melapor.
    </x-alert>

    <div class="box">
        <h2>Data Laporan yang Dikirim</h2>
        <table class="detail">
            <tr><td>Nama Pelapor</td><td>{{ $laporan['nama'] }}</td></tr>
            <tr><td>Lokasi Kejadian</td><td>{{ $laporan['lokasi'] }}</td></tr>
            <tr><td>Tinggi Genangan</td><td>{{ $laporan['tinggi_genangan'] }} cm</td></tr>
            <tr><td>Waktu Pengiriman</td><td>{{ $laporan['waktu'] }}</td></tr>
        </table>

        <a href="{{ route('laporan.create') }}" class="btn">Buat Laporan Baru</a>
        <a href="{{ route('laporan.index') }}" class="btn">Lihat Daftar Laporan</a>
    </div>
@endsection
