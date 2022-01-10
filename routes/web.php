<?php

use App\Http\Controllers\AsramaController;
use App\Http\Controllers\SantriController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asrama', [AsramaController::class, 'index']);
Route::post('/asrama', [AsramaController::class, 'store']);

Route::get('/asrama/{asrama}', [AsramaController::class, 'edit']);
Route::post('/asrama/{asrama}', [AsramaController::class, 'update']);

Route::delete('/asrama/{asrama}', [AsramaController::class, 'destroy']);


Route::get('/santri', [SantriController::class, 'index']);
Route::post('/santri', [SantriController::class, 'store']);

Route::get('/santri/{santri}', [SantriController::class, 'edit']);
Route::post('/santri/{santri}', [SantriController::class, 'update']);

Route::delete('/santri/{santri}', [SantriController::class, 'destroy']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
