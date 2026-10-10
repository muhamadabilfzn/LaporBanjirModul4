@php
    $tinggi = $item->tinggi_genangan;

    if ($tinggi < 50) {
        $status = 'Waspada';
        $warna  = '#f0ad4e';
    } elseif ($tinggi <= 100) {
        $status = 'Siaga';
        $warna  = '#fd7e14';
    } else {
        $status = 'Awas';
        $warna  = '#dc3545';
    }
@endphp

<div class="card" style="border-left: 6px solid {{ $warna }}; padding: 12px; margin-bottom: 10px;">
    <h3>{{ $item->lokasi }}</h3>
    <p>Pelapor: {{ $item->nama_pelapor }}</p>
    <p>Tinggi genangan: {{ $item->tinggi_genangan }} cm</p>
    <p>Tanggal kejadian: {{ \Carbon\Carbon::parse($item->tanggal_kejadian)->translatedFormat('d F Y') }}</p>
    <strong style="color: {{ $warna }}">Status: {{ $status }}</strong>
</div>