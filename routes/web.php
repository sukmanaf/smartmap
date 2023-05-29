<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/maps', \App\Http\Controllers\MapsController::class);
// Route::resource('/nop', \App\Http\Controllers\MapsController::class);
Route::get('/getSearchNop/{slug}', [MapsController::class,'getSearchNop' ])->name('getSearchNop');
Route::get('/getNop', [MapsController::class,'getNop' ])->name('getNop');
Route::get('/getBlok', [MapsController::class,'getBlok' ])->name('getBlok');
Route::get('/getBng', [MapsController::class,'getBng' ])->name('getBng');
Route::get('/masuk', [MapsController::class,'masuk' ])->name('masuk');
Route::post('/save_nop', [MapsController::class,'save_nop' ])->name('save_nop');
// Route::get('/user', [UserController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
