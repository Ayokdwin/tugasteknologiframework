<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AlumniController;


Route::redirect('/', '/beranda');

route::prefix('perpus')->name('perpus')->group(function () {
    Route::get('/daftar_buku',[PerpusController::class,'index'])->name('daftar_buku');
    Route::get('/form',[PerpusController::class,'formPinjam'])->name('formPinjam');
    Route::post('/pinjam',[PerpusController::class,'prosesPinjam'])->name('prosesPinjam');
    Route::get('/{id}',[PerpusController::class,'show'])->name('detail');
    Route::delete('/delete/{id}',[PerpusController::class,'delete'])->name('delete');

});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/beranda',[UlasanController::class,'index'])->name('beranda');
Route::get('/create/alumni',[AlumniController::class,'create'])->name('alumni.create');
Route::post('/create/alumni',[AlumniController::class,'store'])->name('alumni.store');

Route::get('/ulasan/create',[UlasanController::class,'create'])->name('ulasan.create');
Route::post('/ulasan',[UlasanController::class,'store'])->name('ulasan.store');
Route::get('/ulasan/{id}/edit',[UlasanController::class,'edit'])->name('ulasan.edit');
Route::put('/ulasan/{id}',[UlasanController::class,'update'])->name('ulasan.update');
Route::delete('/ulasan/{id}',[UlasanController::class,'destroy'])->name('ulasan.destroy');


Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('/mahasiswa',[MahasiswaController::class,'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}',[MahasiswaController::class,'destroy'])->name('mahasiswa.destroy');