<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RecordatorioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/persona', function () {
    return view('persona.index');
});
Route::get('/recordatorio', function () {
    return view('recordatorio.index');
});

Route::resource("/persona","App\Http\Controllers\PersonaController");
Route::resource("/recordatorio","App\Http\Controllers\RecordatorioController");

Route::get('/recordatorio/create/{id}',[RecordatorioController::class,"create"]);