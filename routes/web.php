<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\MajorController;
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

//Logika delete siswa
Route::delete('/{$id}',[StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen Teacher
Route::name('teachers.')->prefix('teachers')->group(function() {

//Halaman daftar Teacher
Route::get('/',[TeacherController::class, 'index'])->name('index');

//Halaman tampilkan Teacher
Route::get('/{$id}',[TeacherController::class, 'show'])->name('show');

//Halaman tambah Teacher
Route::get('/create',[TeacherController::class, 'create'])->name('create');

//Halaman edit Teacher
Route::get('/{$id}/edit',[TeacherController::class, 'edit'])->name('edit');

//Logika tambah Teacher
Route::post('/',[TeacherController::class, 'store'])->name('store');

//Logika edit Teacher
Route::put('/{$id}',[TeacherController::class, 'update'])->name('update');

//Logika delete Teacher
Route::delete('/{$id}',[TeacherController::class, 'destroy'])->name('destroy');
});

// Manajemen SchoolClass
Route::name('schoolclasses.')->prefix('schoolclasses')->group(function() {

//Halaman daftar SchoolClass
Route::get('/', IndexController::class)->name('index');

//Halaman tampilkan SchoolClass
Route::get('/{$id}', ShowController::class)->name('show');

//Halaman tambah SchoolClass
Route::get('/create', CreateController::class)->name('create');

//Halaman edit SchoolClass
Route::get('/{$id}/edit', EditController::class)->name('edit');

//Logika tambah SchoolClass
Route::post('/', StoreController::class)->name('store');

//Logika edit SchoolClass
Route::put('/{$id}', UpdateController::class)->name('update');

//Logika delete SchoolClass
Route::delete('/{$id}', DestroyController::class)->name('destroy');
});

// Manajemen Major
Route::name('majors.')->prefix('majors')->group(function() {

//Halaman daftar Major
Route::get('/', [MajorController::class, 'index'])->name('index');

//Halaman tampilkan Major
Route::get('/{$id}', [MajorController::class, 'show'])->name('show');

//Halaman tambah Major
Route::get('/create', [MajorController::class, 'create'])->name('create');

//Halaman edit Major
Route::get('/{$id}/edit', [MajorController::class, 'edit'])->name('edit');

//Logika tambah Major
Route::post('/', [MajorController::class, 'store'])->name('store');

//Logika edit Major
Route::put('/{$id}', [MajorController::class, 'update'])->name('update');

//Logika delete Major
Route::delete('/{$id}', [MajorController::class, 'destroy'])->name('destroy');
});
