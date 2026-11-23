<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

<<<<<<< HEAD
class Aldi extends Controller
=======
class AldiController extends Controller
>>>>>>> 17a565821e92e6a506567f572da0ccb70cf6ae39
{
    public function index(): View
    {
<<<<<<< HEAD
        $biodata = [
            'nama_lengkap' => 'I Kadek Aldi Pranata',
            'nama_panggilan' => 'Aldi',
            'handle_github' => 'aldiprnt',
            'domisili' => 'Kota Denpasar, Bali, Indonesia',
            'kampus' => 'Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar',
            'prodi' => 'Informatika',
            'nim' => '2413231026',
            'ringkasan' => 'Mahasiswa Informatika yang tertarik pada pengembangan aplikasi web & mobile, pengujian perangkat lunak (QA), analisis data, serta desain grafis dan produksi acara.',
            'keahlian' => [
                'PHP (Custom MVC, Laravel), MySQL, TypeScript, Node.js, Next.js',
                'Dart & Flutter (sqflite), C++ (OpenMP)',
                'Python (pandas, scikit-learn, matplotlib), Google Colab, Orange Data Mining',
                'Docker, Kubernetes (Minikube), Git & GitHub, Jira, Katalon Studio, n8n',
                'Canva, Figma, TikTok Studio',
            ],
        ];

        // Contoh pemanfaatan helper/fungsi Laravel di Controller
        $biodata['slug_profil'] = Str::slug($biodata['nama_lengkap']);
        $biodata['inisial'] = Str::of($biodata['nama_panggilan'])->substr(0, 1)->upper();
        $biodata['waktu_akses'] = now()->translatedFormat('d F Y, H:i') . ' WITA';

        return view('biodata.index', compact('biodata'));
=======
        $profil = [
            'nama' => 'Kadek Aldi Pranata',
            'tanggal_lahir' => '3 Juni 2006',
            'asal' => 'Bali',
            'kampus' => 'UHN I Gusti Bagus Sugriwa Denpasar',
            'prodi' => 'S1 Informatika',
            'asal_sekolah' => 'SMAN 2 Bangli',
            'peran' => 'Pengembang Web - UAS Pengembangan Web',
            'deskripsi' => 'Mahasiswa S1 Informatika di UHN I Gusti Bagus Sugriwa Denpasar yang fokus pada pengembangan aplikasi web berbasis PHP, Laravel, serta perancangan antarmuka UI/UX.'
        ];

        $keahlian = [
            'HTML5 & CSS3',
            'PHP Native & Laravel',
            'JavaScript',
            'UI/UX Design (Figma)',
            'Git & GitHub Collaboration'
        ];

        $proyek = [
            [
                'judul' => 'Sistem Peminjaman Fasilitas Kampus',
                'keterangan' => 'Aplikasi manajemen peminjaman aula, gamelan, dan kostum tari berbasis PHP MVC.'
            ],
            [
                'judul' => 'Website Reservasi Lapangan Futsal',
                'keterangan' => 'Sistem pemesanan jadwal lapangan futsal dengan konfirmasi QR Code.'
            ],
            [
                'judul' => 'Website Wisata AG Jeep Kintamani',
                'keterangan' => 'Platform profil paket wisata dan pemesanan tur Jeep Kintamani.'
            ]
        ];

        return view('aldi.index', compact('profil', 'keahlian', 'proyek'));
>>>>>>> 17a565821e92e6a506567f572da0ccb70cf6ae39
    }
}