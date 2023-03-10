<?php

use App\Http\Controllers\landingController;
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

Route::get('/ms-admin-ikhsannawawi', function () {
    return view('welcome');
});

Route::get('/', [landingController::class, 'index'])->name('index');
Route::get('/category/romance', [landingController::class, 'index'])->name('index');
Route::get('/detail-video', [landingController::class, 'index'])->name('index');
Route::get('/detail-blog', [landingController::class, 'index'])->name('index');
Route::get('/blog', [landingController::class, 'index'])->name('index');
