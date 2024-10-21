<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = siswa::all();
        return view('siswa.index', compact('siswas'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'pelapor'=> 'required|string',
            'terlapor'=> 'required|string',
            'kelas'=> 'required|string',
            'laporan'=> 'required|string',
            'bukti'=> 'required|image|mimes:jpeg,png,jpg,gif,svg,ico|max:2048',
        ]);
        $image = $request->file('bukti');
        $image->storeAs('bukti', $image->hashName(), 'public');


        siswa::create([
            'pelapor'=> $request->pelapor,
            'terlapor'=> $request->terlapor,
            'kelas'=> $request->kelas,
            'laporan'=> $request->laporan,
            'bukti'=> $image->hashName(),
            'status'=> 'sedang dalam tinjuan',
        ]);


        return redirect('siswa')->with('Mantap', 'Laporan sudah diterima guru');
    }
    public function selesai(Request $request, string $id){
        
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
