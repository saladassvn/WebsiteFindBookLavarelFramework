<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [HomeController::class, 'login']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/register', [HomeController::class, 'register']);

Route::get('/store', [HomeController::class, 'store']);
Route::get('/storeRe', [HomeController::class, 'storeRe']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/useredit', [UserController::class, 'edit']);


Route::get('/bestsellingbook', [BookController::class, 'returnBestSellingBook']);
Route::get('/featurebook', [BookController::class, 'returnFeatureBook']);
Route::get('/newbook', [BookController::class, 'returnNewestBook']);
Route::get('/book', [BookController::class, 'returnAllBook']);
Route::get('/search', [BookController::class, 'search']);
Route::get('/cheaptohigh', [BookController::class, 'returnCheapToHigh']);
Route::get('/hightocheap', [BookController::class, 'returnHighToCheap']);

Route::get('/{MaSach}', [BookController::class, 'returnDetailBook']);
