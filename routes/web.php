<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TutorialController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('web.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::match(['get', 'post'], '/home', [HomeController::class, 'home'])->name('home');

Route::match(['get', 'post'], '/tentang', [TentangController::class, 'tentang'])->name('tentang');

Route::match(['get', 'post'], '/sosmed', [SosmedController::class, 'sosmed'])->name('sosmed');

Route::match(['get', 'post'], '/tutorial', [TutorialController::class, 'tutorial'])->name('tutorial');
