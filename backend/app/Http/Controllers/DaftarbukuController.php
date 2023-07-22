<?php

namespace App\Http\Controllers;

use App\Models\Daftarbuku;
use Illuminate\Http\Request;

class DaftarbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarbuku = daftarbuku::all();
        return view('daftarbuku');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('daftarbuku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftarbuku $daftarbuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftarbuku $daftarbuku)
    {
        return view('daftarbuku.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftarbuku $daftarbuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftarbuku $daftarbuku)
    {
        //
    }
}
