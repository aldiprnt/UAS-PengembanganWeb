<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

class Aldi extends Controller
{
    public function index(): View
    {
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
    }
}