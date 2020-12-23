<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\AuthController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/', function () {
//     return view('login');
// });

//login
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    //buku tamu
    Route::get('/BukuTamu', [BukuTamuController::class, 'index']);
    Route::post('/cekNIK', [BukuTamuController::class, 'cekNIK']);
    Route::post('/simpanTamu', [BukuTamuController::class, 'simpanTamu']);
    Route::get('/BTamu/{id}/edit', [BukuTamuController::class, 'editTamu']);
    Route::post('/updateTamu', [BukuTamuController::class, 'updateTamu']);
    Route::get('/BTamu/{id}/delete', [BukuTamuController::class, 'hapusTamu']);

    //data pegawai
    Route::get('/DataPegawai', [DataPegawaiController::class, 'index']);
    Route::post('/tambahPegawai', [DataPegawaiController::class, 'create']);
    Route::post('/editPegawai', [DataPegawaiController::class, 'editPegawai']);
    Route::get('/pegawai/{id}/delete', [DataPegawaiController::class, 'hapusPegawai']);
});
