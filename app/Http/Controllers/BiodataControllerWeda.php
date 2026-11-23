<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

class BiodataControllerWeda extends Controller
{
    public function index(): View
    {
        $biodata = [
            'nama_lengkap' => 'I Wayan Weda Adi Putra',
            'nama_panggilan' => 'Weda',
            'handle_github' => 'YanWeda',
            'domisili' => 'Kota Denpasar, Bali, Indonesia',
            'kampus' => 'Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar',
            'prodi' => 'Informatika',
            'nim' => '2413231004',
            'peran_organisasi' => 'Himpunan Mahasiswa Jurusan Informatika (HMJ Informatika) — Periode 2026',
            'ringkasan' => 'Mahasiswa Informatika yang tertarik pada pengembangan aplikasi web & mobile, pengujian perangkat lunak (QA), analisis data, serta desain grafis dan produksi acara.',
            'keahlian' => [
                'PHP (Custom MVC, Laravel), MySQL, TypeScript, Node.js, Next.js',
                'Dart & Flutter (sqflite), C++ (OpenMP)',
                'Python (pandas, scikit-learn, matplotlib), Google Colab, Orange Data Mining',
                'Docker, Kubernetes (Minikube), Git & GitHub, Jira, Katalon Studio, n8n',
                'Canva, Figma, TikTok Studio',
            ],
            'pengalaman_dan_kegiatan' => [
                [
                    'judul' => 'Quality Assurance (QA) Intern — PT. Sutrisno Makmur Santosa (Indo Dewata)',
                    'periode' => 'Agu – Sep 2026',
                    'detail' => 'Pengujian fungsional & UI/UX aplikasi Dewata Aplikasi UMKM POS (Android & iOS) serta pencatatan bug di Jira.',
                ],
                [
                    'judul' => 'Pengurus HMJ Informatika',
                    'periode' => '2026',
                    'detail' => 'Pelaksanaan program kerja dan komunikasi resmi Instagram (@hmjinformatika), termasuk Techverse Vol 1 dan turnamen e-sports.',
                ],
                [
                    'judul' => 'Pengembangan Proyek & Eksperimen Teknis',
                    'periode' => '2025 – 2026',
                    'detail' => 'Aplikasi booking kelas & peralatan, model klasifikasi Decision Tree, klinik-sehat (PHP/MySQL MVC), dan mini library Flutter.',
                ],
            ],
        ];

        // Contoh pemanfaatan helper/fungsi Laravel di Controller
        $biodata['slug_profil'] = Str::slug($biodata['nama_lengkap']);
        $biodata['inisial'] = Str::of($biodata['nama_panggilan'])->substr(0, 1)->upper();
        $biodata['waktu_akses'] = now()->translatedFormat('d F Y, H:i') . ' WITA';

        return view('biodata.index', compact('biodata'));
    }
}