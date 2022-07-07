<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('user');
// });

Route::get('/', [UserController::class, 'index'])->name('user_index');
Route::get('user/show', [UserController::class, 'show']);
Route::post('user/store', [UserController::class, 'store']);

Route::get('user/additem', [BarangController::class, 'addIndex']);
Route::post('user/addbarang', [BarangController::class, 'addBarang']);
