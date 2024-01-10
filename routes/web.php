<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lecturers', LecturerController::class);
Route::resource('logbooks', LogbookController::class);
Route::resource('supervisors', SupervisorController::class);
Route::resource('users', UserController::class);