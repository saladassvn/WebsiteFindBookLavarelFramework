<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
<<<<<<< HEAD
use App\Http\Controllers\LoginAdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexAdminController;
use App\Models\sach;
=======
use App\Http\Controllers\UserController;
>>>>>>> 3bfea6247e3715fd54c76b3865140f36f08bde2e
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


Route::get('/bestsellingbook', [BookController::class, 'returnBestSellingBook']);
Route::get('/featurebook', [BookController::class, 'returnFeatureBook']);
Route::get('/newbook', [BookController::class, 'returnNewestBook']);
Route::get('/book', [BookController::class, 'returnAllBook']);
Route::get('/search', [BookController::class, 'search']);
Route::get('/cheaptohigh', [BookController::class, 'returnCheapToHigh']);
Route::get('/hightocheap', [BookController::class, 'returnHighToCheap']);

Route::get('/{MaSach}', [BookController::class, 'returnDetailBook']);

//Admin
// Đăng nhập và xử lý đăng nhập
// Route::get('admin/login', [LoginAdminController::class, 'getLogin'])->name('LoginAdmin');
// Route::get('admin/login', ['as' => 'getLogin', 'uses' => 'LoginAdminController\LoginAdminController@getLogin']);
// Route::post('admin/login', [Auth\LoginAdminController::class, 'postLogin']);
Route::get('admin/login', [LoginAdminController::class, 'getLogin']);
Route::post('admin/login', [LoginAdminController::class, 'postLogin']);

//Trang chủ
Route::get('admin/IndexAdmin', [IndexAdminController::class, 'show']);

//Xóa
Route::get('admin/delete/{MaSach}', [IndexAdminController::class, 'delete']);
//Sửa
Route::get('admin/edit/{MaSach}', [IndexAdminController::class, 'showData']);
Route::post('admin/edit', [IndexAdminController::class, 'update']);
//Thêm
Route::view('admin/create', 'adminpages\CreateProducts');
Route::post('admin/create', [IndexAdminController::class, 'AddData']);