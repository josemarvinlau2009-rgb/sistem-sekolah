<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "This is the student list page.";
    }
        public function show(string $id)
    {
        return "This is the detail page for student with ID: {$id}";
    }
        public function create()
    {
        return "This is the page to add a new student.";
    }
        public function edit(string $id)
    {
        return "This is the page to edit student with ID: {$id}";
    }
        public function store()
    {
        return "This is the page to store new student data.";
    }
        public function update(string $id)
    {
        return "This is the page to update student with ID: {$id}";
    }
        public function destroy(string $id)
    {
        return "This is the page to delete student with ID: {$id}";
    }
}
