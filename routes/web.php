<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/agenda', [HomeController::class, 'agenda']);
Route::get('/atlet-pon', [HomeController::class, 'atletPON']);
Route::get('/atlet-daerah', [HomeController::class, 'atletDaerah']);
Route::get('/category', [HomeController::class, 'category']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/pengurus-inti', [HomeController::class, 'pengurusInti']);
Route::get('/pengurus-cabang', [HomeController::class, 'pengurusCabang']);
Route::get('/single-post', [HomeController::class, 'singlePost']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registration']);
Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot');
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/manage-agenda', [DashboardController::class, 'agenda']);
    Route::get('/dashboard/manage-atlet-pon', [DashboardController::class, 'atletPON'])->name('atletPON');
    Route::get('/dashboard/manage-atlet-daerah', [DashboardController::class, 'atletDaerah']);
    Route::get('/dashboard/manage-news', [DashboardController::class, 'news']);
    Route::get('/dashboard/manage-pengurus-pusat', [DashboardController::class, 'pengurusPusat']);
    Route::get('/dashboard/manage-pengurus-daerah', [DashboardController::class, 'pengurusDaerah']);

});





