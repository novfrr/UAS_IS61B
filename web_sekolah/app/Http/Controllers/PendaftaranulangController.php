<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranulangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $ul = Pendaftaranulang::all();
        return view('admin.pendaftaranulang.index',compact('nomor','ul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ul = Pendftaranulang::all();
        return view('admin.pendaftaranulang.form',compact('ul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ul = new Pendaftarulang;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
