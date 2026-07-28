<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Ini adalah halaman daftar jurusan.';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Ini adalah halaman untuk menambahkan jurusan baru.';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Ini adalah halaman untuk menyimpan data jurusan baru.';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Ini adalah halaman detail jurusan dengan ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return "Ini adalah halaman untuk mengedit jurusan.";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return "Ini adalah halaman untuk memperbarui jurusan.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return "Ini adalah halaman untuk menghapus jurusan.";
    }
}
