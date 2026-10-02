<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | LaporBanjir BPBD Kab. Bandung</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f1f5f9; color: #1e293b; line-height: 1.5; }
        header { background: #0b5394; color: #fff; padding: 20px 0; text-align: center; }
        header h1 { margin: 0; font-size: 28px; }
        header p { margin: 4px 0 0; font-size: 14px; opacity: .9; }
        nav { background: #073763; text-align: center; }
        nav a { display: inline-block; color: #fff; text-decoration: none; padding: 12px 20px; }
        nav a:hover, nav a.active { background: #0b5394; }
        main { max-width: 800px; margin: 24px auto; padding: 0 16px; min-height: 55vh; }
        h2 { margin-top: 0; }
        footer { background: #073763; color: #cbd5e1; text-align: center; padding: 16px; font-size: 13px; }

        .box { background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,.1); }
        label { display: block; margin: 14px 0 4px; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 1px solid #94a3b8; border-radius: 6px; font-size: 15px; }
        .error { color: #b91c1c; font-size: 13px; margin-top: 4px; }
        .btn { margin-top: 18px; background: #0b5394; color: #fff; border: 0; padding: 10px 22px; border-radius: 6px; font-size: 15px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn:hover { background: #073763; }

        .alert { padding: 14px 16px; border-radius: 6px; margin-bottom: 16px; }
        .alert-success { background: #dcfce7; color: #166534; border: 1px solid #86efac; }
        .alert-danger  { background: #fee2e2; color: #991b1b; border: 1px solid #fca5a5; }
        .alert-info    { background: #dbeafe; color: #1e40af; border: 1px solid #93c5fd; }

        table.detail { width: 100%; border-collapse: collapse; }
        table.detail td { padding: 8px 4px; border-bottom: 1px solid #e2e8f0; }
        table.detail td:first-child { width: 40%; font-weight: bold; }

        .card { background: #fff; border-left: 6px solid #64748b; border-radius: 8px; padding: 16px; margin-bottom: 14px; box-shadow: 0 1px 4px rgba(0,0,0,.1); }
        .card h3 { margin: 0 0 6px; }
        .card p { margin: 2px 0; font-size: 14px; }
        .badge { display: inline-block; padding: 3px 12px; border-radius: 20px; color: #fff; font-size: 13px; font-weight: bold; margin-top: 6px; }
        .waspada { border-left-color: #eab308; } .waspada .badge { background: #ca8a04; }
        .siaga   { border-left-color: #f97316; } .siaga .badge   { background: #ea580c; }
        .awas    { border-left-color: #dc2626; } .awas .badge    { background: #dc2626; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <p>Sistem Pelaporan Banjir - BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('laporan.create') }}" class="{{ request()->routeIs('laporan.create') ? 'active' : '' }}">Buat Laporan</a>
        <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung - Prototipe LaporBanjir
    </footer>
</body>
</html>
