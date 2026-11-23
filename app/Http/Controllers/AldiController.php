<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AldiController extends Controller
{
    public function index()
    {
        $nama = "Nama Lengkap Anggota";
        $peran = "Anggota Kelompok - UAS Pengembangan Web";

        return view('nama_view', compact('nama', 'peran'));
    }
}