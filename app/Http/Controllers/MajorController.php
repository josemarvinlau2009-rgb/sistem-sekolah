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
        return 'This is the major list page.';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'This is the page to add a new major.';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'This is the page to store new major data.';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "This is the detail page for major with ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "This is the page to edit major with ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "This is the page to update major with ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "This is the page to delete major with ID: {$id}";
    }
}
