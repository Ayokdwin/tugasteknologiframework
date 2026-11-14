<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UlasanAlumni;
use App\Models\Alumni;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = UlasanAlumni::with('alumni')->latest()->take(5)->get();
        return view('beranda', compact('ulasan'));
    }
    public function create()
    {
        $alumni = Alumni::all();
        return view('ulasan.create', compact('alumni'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'alumni_id' => 'required|exists:alumni,id',
            'ulasan' => 'required|string|max:1000',
        ]);
    
        UlasanAlumni::create($request->only('alumni_id', 'ulasan'));

        return redirect()->route('beranda')->with('success', 'Ulasan berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $ulasan = UlasanAlumni::findOrFail($id);
        $alumni = Alumni::all();

        return view('ulasan.edit', compact('ulasan', 'alumni'));
    }
    public function update(Request $request, $id)
    {
        $ulasan = UlasanAlumni::findOrFail($id);
        $data = $request->validate([
            'alumni_id' => 'required|exists:alumni,id',
            'ulasan'=> 'required|string|max:1000',
            ]);
        $ulasan->update($data);
        return redirect()->route('beranda')->with('success', 
        'Data ulasan berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $ulasan = UlasanAlumni::findOrFail($id);
        $ulasan->delete();

        return redirect()->route('beranda')->with('success', 'Ulasan berhasil dihapus.');
    }
}
