<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        $data = Registrasi::with(['mahasiswa', 'jadwal'])->get();
        return $data;
    }
}