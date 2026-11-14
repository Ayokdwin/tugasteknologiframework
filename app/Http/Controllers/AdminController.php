<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class AdminController extends Controller
{
     public function index()
    {
        $mahasiswas = DataMahasiswa::all();
        return view('welcome', compact('mahasiswas'));
    }
}
