<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/Estado', App\Http\Controllers\EstadoController::class)->names('estados');
Route::resource('/Match', App\Http\Controllers\MatchController::class)->names('matches');
Route::resource('/Team', App\Http\Controllers\TeamController::class)->names('teams');