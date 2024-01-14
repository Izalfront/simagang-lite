<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/lecture', [LecturerController::class, 'index']);
Route::get('/logbooks', [LogbookController::class, 'index']);
Route::get('/add-logbook', [LogbookController::class, 'addLogbook']);
Route::get('/supervisors', [SupervisorController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
