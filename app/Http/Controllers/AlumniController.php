<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with('ulasan')->latest()->get();
        return view('alumni.index', compact('alumni'));
    }
    
    public function create()
    {
        return view('alumni.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:alumni,nim',
            'jurusan' => 'required|string|max:100',
            'pekerjaan' => 'required|string|max:100',
            'tahun_lulus' => 'required|integer|min:1900|max:' . date('Y'),
            'ulasan' => 'required|string|max:1000',
            
        ]);

        DB::transaction(function () use ($request) {
            $alumni = new Alumni($request->only([
                'nama', 'nim', 'jurusan', 'pekerjaan', 'tahun_lulus',
            ]));
            $alumni->save();

            $alumni->ulasan()->create([
                'ulasan' => $request->input('ulasan'),
            ]);
        });

        return redirect()->route('beranda')->with('success', 'Data alumni berhasil ditambahkan.');
    }
}
