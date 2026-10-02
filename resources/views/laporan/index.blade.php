@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>

    @forelse ($daftarLaporan as $laporan)
        {{-- Status genangan ditentukan dengan @if / @elseif / @else --}}
        @if ($laporan['tinggi'] < 30)
            @php
                $status = 'Waspada';
                $kelas  = 'waspada';
            @endphp
        @elseif ($laporan['tinggi'] <= 70)
            @php
                $status = 'Siaga';
                $kelas  = 'siaga';
            @endphp
        @else
            @php
                $status = 'Awas';
                $kelas  = 'awas';
            @endphp
        @endif

        @include('partials.laporan-card', [
            'laporan' => $laporan,
            'status'  => $status,
            'kelas'   => $kelas,
        ])
    @empty
        <x-alert type="info">Belum ada laporan banjir.</x-alert>
    @endforelse
@endsection
