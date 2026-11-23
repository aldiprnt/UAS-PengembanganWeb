<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DwiController extends Controller
{
    public function index()
    {
        $judul = 'Halaman Pengembangan Web';
        $items = [
            'Struktur Folder Laravel',
            'Routing & Controller',
            'Blade View',
        ];

        return view('dwi', compact('judul', 'items'));
    }

    public function create()
    {
        return view('dwi-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        return redirect('/dwi')->with('success', 'Data "' . $request->nama . '" berhasil disimpan.');
    }
}