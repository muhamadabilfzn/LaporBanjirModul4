@extends('layouts.app')

@section('title', 'Laporan Terkirim')

@section('content')
<x-alert type="success">
    Terima kasih, {{ $laporan->nama_pelapor }}! Laporan banjir di
    <strong>{{ $laporan->lokasi }}</strong> (tinggi genangan {{ $laporan->tinggi_genangan }} cm)
    pada {{ \Carbon\Carbon::parse($laporan->tanggal_kejadian)->translatedFormat('d F Y') }}
    berhasil disimpan.
</x-alert>

<a href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
<a href="{{ route('laporan.create') }}">Kirim Laporan Lain</a>
@endsection