<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\API\AuthController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::post('/user',[UserController::class, 'register']);
Route::post('/login',[UserController::class,'login']);
//Route::post('/login2',[UserController::class,'login2']);


Route::get('/films',[FilmController::class,'index']);
Route::get('/films/{id}',[FilmController::class,'show']);
Route::delete('/films/{film}',[FilmController::class,'delete']);

Route::get('/genres',[GenreController::class,'index']);
Route::get('/genres/{id}',[GenreController::class,'show']);
Route::delete('/genres/{genre}',[GenreController::class,'delete']);

Route::get('/directors',[DirectorController::class,'index']);
Route::get('/directors/{id}',[DirectorController::class,'show']);
Route::delete('/directors/{director}',[DirectorController::class,'delete']);

Route::get('/tickets',[TicketsController::class,'index']);
Route::get('/tickets/{id}',[TicketsController::class,'show']);
Route::delete('/tickets/{ticket}',[TicketsController::class,'delete']);

Route::post('/register',[AuthController::class,'register']);
//Route::post('/login',[AuthController::class,'login']);