<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata — {{ $biodata['nama_lengkap'] }} | {{ config('app.name', 'Laravel') }}</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
            background: #f4f6f9;
            color: #1e293b;
            line-height: 1.6;
            padding: 32px 16px;
        }
        .container {
            max-width: 820px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: #ffffff;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .avatar {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 700;
            flex-shrink: 0;
        }
        .header h1 { font-size: 24px; margin-bottom: 4px; }
        .header p { font-size: 14px; opacity: 0.9; }
        .section { padding: 24px 32px; border-bottom: 1px solid #e2e8f0; }
        .section:last-child { border-bottom: none; }
        .section h2 {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: #1d4ed8;
            margin-bottom: 14px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 12px 20px;
        }
        .info-item label {
            display: block;
            font-size: 12px;
            color: #64748b;
            font-weight: 600;
        }
        .info-item span { font-size: 14px; font-weight: 500; }
        ul.list { padding-left: 20px; }
        ul.list li { margin-bottom: 8px; font-size: 14px; }
        .item-card {
            padding: 12px 14px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 10px;
            background: #f8fafc;
        }
        .item-card:last-child { margin-bottom: 0; }
        .item-top {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 4px;
        }
        .periode { font-size: 12px; color: #1d4ed8; white-space: nowrap; }
        .footer {
            background: #f8fafc;
            padding: 16px 32px;
            font-size: 12px;
            color: #64748b;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 8px;
        }
        a { color: #1d4ed8; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="avatar">{{ $biodata['inisial'] }}</div>
            <div>
                <h1>{{ $biodata['nama_lengkap'] }}</h1>
                <p>
                    {{ $biodata['prodi'] }} ({{ $biodata['nim'] }}) • {{ $biodata['kampus'] }}
                </p>
                <p style="margin-top: 4px; font-size: 13px;">
                    GitHub: <strong>{{ $biodata['handle_github'] }}</strong> • {{ $biodata['domisili'] }}
                </p>
            </div>
        </div>

        <div class="section">
            <h2>Ringkasan Profil</h2>
            <p style="font-size: 14px;">{{ $biodata['ringkasan'] }}</p>
        </div>

        <div class="section">
            <h2>Informasi Akademik & Organisasi</h2>
            <div class="info-grid">
                <div class="info-item">
                    <label>Nama Panggilan</label>
                    <span>{{ $biodata['nama_panggilan'] }}</span>
                </div>
                <div class="info-item">
                    <label>NIM</label>
                    <span>{{ $biodata['nim'] }}</span>
                </div>
                <div class="info-item">
                    <label>Program Studi</label>
                    <span>{{ $biodata['prodi'] }}</span>
                </div>
                <div class="info-item">
                    <label>Organisasi</label>
                    <span>{{ $biodata['peran_organisasi'] }}</span>
                </div>
                <div class="info-item">
                    <label>Slug Profil (Str::slug)</label>
                    <span>{{ $biodata['slug_profil'] }}</span>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Keahlian & Teknologi</h2>
            @if (!empty($biodata['keahlian']))
                <ul class="list">
                    @foreach ($biodata['keahlian'] as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <p style="font-size: 14px;">Belum ada data keahlian.</p>
            @endif
        </div>

        <div class="section">
            <h2>Pengalaman & Aktivitas</h2>
            @foreach ($biodata['pengalaman_dan_kegiatan'] as $item)
                <div class="item-card">
                    <div class="item-top">
                        <span>{{ $item['judul'] }}</span>
                        <span class="periode">{{ $item['periode'] }}</span>
                    </div>
                    <p style="font-size: 13px; color: #334155;">{{ $item['detail'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="footer">
            <span>Diakses pada: {{ $biodata['waktu_akses'] }}</span>
            <span>
                <a href="{{ route('biodata.index') }}">Refresh Halaman</a> •
                Framework Laravel {{ app()->version() }}
            </span>
        </div>
    </div>
</body>
</html>