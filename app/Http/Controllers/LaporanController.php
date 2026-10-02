<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    private function dataLaporan(): array
    {
        return [
            ['id' => 1, 'nama' => 'Asep Sunandar', 'lokasi' => 'Dayeuhkolot, Kab. Bandung',  'tinggi' => 85, 'waktu' => '01-10-2026 06:15'],
            ['id' => 2, 'nama' => 'Siti Rohmah',   'lokasi' => 'Baleendah, Kab. Bandung',    'tinggi' => 50, 'waktu' => '01-10-2026 07:40'],
            ['id' => 3, 'nama' => 'Dedi Mulyadi',  'lokasi' => 'Bojongsoang, Kab. Bandung',  'tinggi' => 25, 'waktu' => '01-10-2026 08:05'],
            ['id' => 4, 'nama' => 'Euis Komariah', 'lokasi' => 'Rancaekek, Kab. Bandung',    'tinggi' => 70, 'waktu' => '01-10-2026 09:30'],
            ['id' => 5, 'nama' => 'Rudi Hartono',  'lokasi' => 'Majalaya, Kab. Bandung',     'tinggi' => 15, 'waktu' => '01-10-2026 10:10'],
        ];
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'            => 'required|string|max:100',
            'lokasi'          => 'required|string|max:150',
            'tinggi_genangan' => 'required|numeric|min:0|max:1000',
        ], [
            'nama.required'            => 'Nama pelapor wajib diisi.',
            'lokasi.required'          => 'Lokasi kejadian wajib diisi.',
            'tinggi_genangan.required' => 'Tinggi genangan wajib diisi.',
            'tinggi_genangan.numeric'  => 'Tinggi genangan harus berupa angka.',
        ]);

        $validated['waktu'] = now()->format('d-m-Y H:i');

        return redirect()->route('laporan.konfirmasi')->with('laporan', $validated);
    }

    public function konfirmasi()
    {
        $laporan = session('laporan');

        if (!$laporan) {
            return redirect()->route('laporan.create');
        }

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $daftarLaporan = $this->dataLaporan();

        return view('laporan.index', compact('daftarLaporan'));
    }
}
