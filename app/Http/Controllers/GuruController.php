<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Models\Siswa;

class GuruController extends Controller
{
    public function index()
    {
        $siswas = siswa::all();
        return view('guru.index', compact('siswas'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }
    public function store(Request $request)
    {
      
    }
  
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gurus = siswa::findOrFail($id);

        return view ('guru.edit', compact('gurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => ' required'
        ]);

        $gurus = siswa::findOrFail($id);

        $gurus->update([
            'status' =>  $request->status,
        ]);


        return redirect()->route('guru.index')->with (['success'=> 'data berhasil dirubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}