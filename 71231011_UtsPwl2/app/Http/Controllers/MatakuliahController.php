<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::with(['jadwals'])->get();
        return $data;
    }
}