<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "This is the teacher list page.";
    }
        public function show(string $id)
    {
        return "This is the detail page for teacher with ID: {$id}";
    }
        public function create()
    {
        return "This is the page to add a new teacher.";
    }
        public function edit(string $id)
    {
        return "This is the page to edit teacher with ID: {$id}";
    }
        public function store()
    {
        return "This is the page to store new teacher data.";
    }
        public function update(string $id)
    {
        return "This is the page to update teacher with ID: {$id}";
    }
        public function destroy(string $id)
    {
        return "This is the page to delete teacher with ID: {$id}";
    }
}
