<?php

use Illuminate\Support\Facades\Route;
// berfungsi mendefinisikan secara singkat untuk controllernya
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// index
Route::get('/', [HomeController::class, 'index']);
// about
Route::get('/about', [AboutController::class, 'about']);
// article
Route::get('/article/{id}', [ArticleController::class, 'article']);

