<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('karyawan', [KaryawanController::class, 'index']); // get all karyawan
Route::post('create', [KaryawanController::class, 'store']); // create karyawan
Route::put('update/{id}', [KaryawanController::class, 'update']); // get karyawan by id
Route::delete('delete/{id}', [KaryawanController::class, 'destroy']); // delete karyawan by id
Route::get('detail/{id}', [KaryawanController::class, 'show']); // get karyawan by id
