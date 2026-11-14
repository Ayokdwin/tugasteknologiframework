<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DataMahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:data_mahasiswa,nim',
            'jurusan' => 'required|string|max:100',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'alamat' => 'nullable|string|max:255',
        ]);
        DataMahasiswa::create($data);
        return redirect()->route('mahasiswa.index')->with('success', 
        'Data mahasiswa berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $mahasiswa = DataMahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        $mahasiswa = DataMahasiswa::findOrFail($id);
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => ['required', 'string', 'max:20', Rule::unique('data_mahasiswa', 'nim')->ignore($mahasiswa->id)],
            'jurusan' => 'required|string|max:100',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'alamat' => 'nullable|string|max:255',
        ]);
        $mahasiswa->update($data);
        return redirect()->route('mahasiswa.index')->with('success', 
        'Data mahasiswa berhasil diperbarui.');
    }

public function destroy(Request $request, $id)
{
    $mahasiswa = Datamahasiswa::findOrFail($id);
    $mahasiswa->delete();
    

    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
}

}
