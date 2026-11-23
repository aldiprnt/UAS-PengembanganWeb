<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AldiController extends Controller
{
    public function index()
    {
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
    }
}