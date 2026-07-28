<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa.";
    }
        public function show(string $id)
    {
        return "Ini adalah halaman detail siswa dengan ID: {$id}";
    }
        public function create()
    {
        return "Ini adalah halaman untuk menambahkan siswa baru.";
    }
        public function edit()
    {
        return "Ini adalah halaman untuk mengedit siswa.";
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
