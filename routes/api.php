<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login-mahasiswa', [MahasiswaController::class, 'loginMahasiswa']);
Route::post('/regis-mahasiswa', [MahasiswaController::class, 'registerMahasiswa']);
Route::post('/login-dosen', [DosenController::class, 'loginDosen']);
Route::post('/regis-dosen', [DosenController::class, 'registerDosen']);
Route::get('/kode-dosen', [RequestController::class, 'showCode']);
Route::get('/m', [MahasiswaController::class, 'index']);
Route::get('/d', [DosenController::class, 'index']);