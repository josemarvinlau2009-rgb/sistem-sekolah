<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select('id', 'nis', 'name', 'class', 'major')
        ->get();

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }
        public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }
        public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title,
        ]);
    }
        public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }
        public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'max:100', 'unique:students,email'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'class' => ['required', 'string'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BiD']
        ]);

        //Tambah data ke database
        Student::create($validatedRequest);

        //Handle If Success
            return redirect()->route('students.index');
    }
        public function update(Student $student, Request $request)
    {
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis,' . $student->id],
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'max:100', 'unique:students,email,' . $student->id],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'class' => ['required', 'string'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BiD']
        ]);

        //Update data ke database
        $student->update($validatedRequest);

        //Handle If Success
            return redirect()->route('students.index');
    }
        public function destroy(Student $student)
    {
        //Delete data from database
        $student->delete();
        //Handle If Success
        return redirect()->route('students.index');
    }
}
