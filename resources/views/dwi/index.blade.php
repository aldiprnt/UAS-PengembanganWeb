<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        .card { max-width: 600px; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        .alert { padding: 10px 14px; background: #e6f7ed; border: 1px solid #8fd1a8; border-radius: 6px; margin-bottom: 16px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ $judul }}</h1>

        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <h3>Daftar Materi:</h3>
        <ul>
            @foreach ($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <form action="/dwi" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Masukkan data baru..." required>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>