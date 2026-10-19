<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Form POST NIM & Nama
    public function mahasiswa()
    {
        $menu = 'mahasiswa';
        return view('mahasiswa', compact('menu'));
    }

    public function proses(Request $request)
    {
        return view('proses', [
            'metode' => 'POST',
            'nim'    => $request->nim,
            'nama'   => $request->nama,
            'menu'   => 'mahasiswa',
        ]);
    }

    // 1.c - Template Inheritance: 4 Child (courses, students, grades, assignments)
    public function courses()
    {
        $menu = 'courses';
        return view('courses', compact('menu'));
    }

    public function students()
    {
        $menu = 'students';
        return view('students', compact('menu'));
    }

    public function grades()
    {
        $menu = 'grades';
        return view('grades', compact('menu'));
    }

    public function assignments()
    {
        $menu = 'assignments';
        return view('assignments', compact('menu'));
    }
}