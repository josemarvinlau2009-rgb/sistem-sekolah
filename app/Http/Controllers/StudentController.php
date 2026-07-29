<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'name' => 'Daniel',
                'nis' => '22100002',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'
            ]
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }
        public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        return view('students.show', [
            'title' => $title
        ]);
    }
        public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title
        ]);
    }
        public function edit()
    {
        $title = "Sistem Sekolah - Edit Siswa";
        return view('students.edit', [
            'title' => $title
        ]);
    }
        public function store()
    {
        return "Ini adalah halaman untuk menyimpan data siswa baru.";
    }
        public function update()
    {
        return "Ini adalah halaman untuk memperbarui siswa.";
    }
        public function destroy()
    {
        return "Ini adalah halaman untuk menghapus siswa.";
    }
}
