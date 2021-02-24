<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;

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
// fontend
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/trang-chu',[Homecontroller::class, 'index']);

// backends
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);
