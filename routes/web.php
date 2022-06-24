<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
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

//User
Route::get('/', [HomeController::class, 'index']);
Route::get('/homepage', [HomeController::class, 'index']);

Route::get('/bestsellingbook', [BookController::class, 'returnBestSellingBook']);
Route::get('/featurebook', [BookController::class, 'returnFeatureBook']);
Route::get('/book', [BookController::class, 'returnAllBook']);
Route::get('/search', [BookController::class, 'search']);

Route::get('/bookdetail', [BookController::class, 'search']);
