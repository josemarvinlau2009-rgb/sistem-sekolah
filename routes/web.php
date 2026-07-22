<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen Siswa
Route::name('students.')->prefix('students')->group(function() {

//Halaman daftar siswa
Route::get('/',[StudentController::class, 'index'])->name('index');

//Halaman tampilkan siswa
Route::get('/{$id}',[StudentController::class, 'show'])->name('show');

//Halaman tambah siswa
Route::get('/create',[StudentController::class, 'create'])->name('create');

//Halaman edit siswa
Route::get('/{$id}/edit',[StudentController::class, 'edit'])->name('edit');

//Logika tambah siswa
Route::post('/',[StudentController::class, 'store'])->name('store');

//Logika edit siswa
Route::put('/{$id}',[StudentController::class, 'update'])->name('update');

//Logika edit siswa
Route::delete('/{$id}',[StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen Siswa
Route::name('students.')->prefix('students')->group(function() {

//Halaman daftar siswa
Route::get('/',[TeacherController::class, 'index'])->name('index');

//Halaman tampilkan siswa
Route::get('/{$id}',[TeacherController::class, 'show'])->name('show');

//Halaman tambah siswa
Route::get('/create',[TeacherController::class, 'create'])->name('create');

//Halaman edit siswa
Route::get('/{$id}/edit',[TeacherController::class, 'edit'])->name('edit');

//Logika tambah siswa
Route::post('/',[TeacherController::class, 'store'])->name('store');

//Logika edit siswa
Route::put('/{$id}',[TeacherController::class, 'update'])->name('update');

//Logika edit siswa
Route::delete('/{$id}',[TeacherController::class, 'destroy'])->name('destroy');
});
