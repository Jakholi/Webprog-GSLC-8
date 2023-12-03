<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\MahasiswaController;

Route::get('/show', function (){
        return view('mahasiswa.show');
});

Route::get('/', [MahasiswaController::class,'index']);

Route::get('/proses-form', [MahasiswaController::class, 'prosesForm']);

Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])
->name('mahasiswas.index');

Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])
->name('mahasiswas.create');

Route::post('/mahasiswas', [MahasiswaController::class, 'store'])
->name('mahasiswas.store');

Route::get('/mahasiswas/edit', [MahasiswaController::class, 'edit'])
->name('mahasiswas.edit');

Route::get('/mahasiswas/edit/update', [MahasiswaController::class, 'update'])
->name('mahasiswas.update');