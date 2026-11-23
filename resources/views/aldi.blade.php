<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anggota - UAS Pengembangan Web</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; max-width: 400px; }
        h1 { color: #2c3e50; margin-bottom: 10px; }
        p { color: #555; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Halo, Saya {{ $nama }}</h1>
        <p>{{ $peran }}</p>
        <p>Implementasi <strong>Controller</strong> dan <strong>View</strong> pada Laravel.</p>
    </div>
</body>
</html>