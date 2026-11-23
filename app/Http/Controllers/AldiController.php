<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

class AldiController extends Controller
{
    public function index(): View
    {
        $biodata = [
            'nama_lengkap' => 'I Kadek Aldi Pranata',
            'nama_panggilan' => 'Aldi',
            'handle_github' => 'aldiprnt',
            'domisili' => 'Denpasar, Bali, Indonesia',
            'kampus' => 'Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar',
            'prodi' => 'Informatika',
            'nim' => '2413231015',
            'peran_organisasi' => 'Anggota Aktif Komunitas Pengembangan Web & Teknologi Kampus — 2026',
            'ringkasan' => 'Mahasiswa Informatika yang berfokus pada pengembangan aplikasi web backend dan frontend modern, manajemen basis data relasional, serta perancangan antarmuka web yang responsif.',
            'keahlian' => [
                'PHP, Framework Laravel (Blade, Routing, MVC), REST API',
                'HTML5, CSS3, Tailwind CSS, JavaScript (ES6+)',
                'MySQL, MariaDB, Perancangan ERD & Normalisasi Database',
                'Git, GitHub Collaboration, Laragon, Visual Studio Code',
                'UI Wireframing & Prototyping Dasar',
            ],
            'pengalaman_dan_kegiatan' => [
                [
                    'judul' => 'Kolaborasi Proyek UAS Pengembangan Web',
                    'periode' => '2026',
                    'detail' => 'Membangun aplikasi web berbasis arsitektur MVC Laravel bersama tim menggunakan alur kerja kolaborasi repository GitHub.',
                ],
                [
                    'judul' => 'Pengembangan Sistem Informasi Berbasis Web',
                    'periode' => '2025 – 2026',
                    'detail' => 'Merancang struktur halaman dinamis, pengelolaan routing, dan integrasi komponen tampilan untuk tugas akademik.',
                ],
                [
                    'judul' => 'Eksplorasi Frontend & Desain Responsif',
                    'periode' => '2025',
                    'detail' => 'Mengimplementasikan tata letak halaman web modern dengan komponen kartu, grid responsif, dan tipografi bersih.',
                ],
            ],
        ];

        // Pemanfaatan helper & fungsi bawaan Laravel
        $biodata['slug_profil'] = Str::slug($biodata['nama_lengkap']);
        $biodata['inisial'] = Str::of($biodata['nama_panggilan'])->substr(0, 1)->upper();
        $biodata['waktu_akses'] = now()->translatedFormat('d F Y, H:i') . ' WITA';

        return view('aldi.index', compact('biodata'));
    }
}