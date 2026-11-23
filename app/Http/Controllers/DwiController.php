<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

class DwiController extends Controller
{
    public function index(): View
    {
        $biodata = [
            'nama_lengkap' => 'Ni Kadek Dwi Puspitasari',
            'nama_panggilan' => 'Dwi',
            'handle_github' => 'dwipuspitasari',
            'domisili' => 'Denpasar, Bali, Indonesia',
            'kampus' => 'Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar',
            'prodi' => 'Informatika',
            'nim' => '2413231020',
            'peran_organisasi' => 'Anggota Aktif Tim Proyek & Kegiatan Mahasiswa Informatika — 2026',
            'ringkasan' => 'Mahasiswa Informatika yang tertarik pada pengembangan antarmuka web, pengelolaan konten dan dokumentasi proyek, serta kolaborasi tim dalam pembuatan aplikasi berbasis web.',
            'keahlian' => [
                'HTML5, CSS3, Blade Template, Tata Letak Web Responsif',
                'Dasar PHP & Framework Laravel (Routing, Controller, View)',
                'Penyusunan Dokumentasi, Struktur Data & Alur Proyek',
                'Kolaborasi Tim dengan Git & GitHub',
                'Desain Grafis Pendukung & Presentasi Proyek',
            ],
            'pengalaman_dan_kegiatan' => [
                [
                    'judul' => 'Proyek Kolaborasi UAS Pengembangan Web',
                    'periode' => '2026',
                    'detail' => 'Menyusun halaman profil/biodata berbasis MVC Laravel dan berkoordinasi bersama tim pada repository GitHub.',
                ],
                [
                    'judul' => 'Penyusunan & Pengujian Tampilan Halaman Web',
                    'periode' => '2025 - 2026',
                    'detail' => 'Memastikan tampilan halaman web rapi, mudah dibaca, dan sesuai dengan data yang dikirimkan dari Controller.',
                ],
                [
                    'judul' => 'Kegiatan Akademik & Kerja Kelompok Informatika',
                    'periode' => '2025',
                    'detail' => 'Berpartisipasi dalam pengerjaan tugas kelompok, presentasi materi, dan dokumentasi hasil pekerjaan.',
                ],
            ],
        ];

        // Pemanfaatan helper & fungsi bawaan Laravel
        $biodata['slug_profil'] = Str::slug($biodata['nama_lengkap']);$biodata['inisial'] = Str::of($biodata['nama_panggilan'])->substr(0, 1)->upper();$biodata['waktu_akses'] = now()->translatedFormat('d F Y, H:i') . ' WITA';

        return view('dwi.index', compact('biodata'));
    }
}