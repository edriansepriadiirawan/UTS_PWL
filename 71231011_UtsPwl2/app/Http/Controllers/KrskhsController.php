<?php

namespace App\Http\Controllers;

use App\Models\Krskhs;
use Illuminate\Http\Request;

class KrskhsController extends Controller
{
    public function index()
    {
        $data = Krskhs::with(['mahasiswa', 'jadwal'])->get();
        return $data;
    }
}