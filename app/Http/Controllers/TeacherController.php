<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar guru.";
    }
        public function show(string $id)
    {
        return "Ini adalah halaman detail guru dengan ID: {$id}";
    }
        public function create()
    {
        return "Ini adalah halaman untuk menambahkan guru baru.";
    }
        public function edit()
    {
        return "Ini adalah halaman untuk mengedit guru.";
    }
        public function store()
    {
        return "Ini adalah halaman untuk menyimpan data guru baru.";
    }
        public function update(Request $request)
    {
        return "Ini adalah halaman untuk memperbarui guru.";
    }
        public function destroy()
    {
        return "Ini adalah halaman untuk menghapus guru.";
    }
}
