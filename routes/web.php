<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\OrderAdminController;
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
Route::get('/vieworder', [UserController::class, 'vieworder']);


Route::get('/viewcart', [UserController::class, 'viewcart'])->name('viewcart');;   

Route::get('/add-to-cart/{id}', [BookController::class, 'addtocart'])->name('addCart');
Route::get('/checkout', [BookController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [BookController::class, 'postcheckout'])->name('checkout');
Route::get('/remove/{id}',[UserController::class, 'getRemoveItem'])->name('bookremove');;

Route::get('/detailOrder/{MaDH}', [UserController::class, 'detailOrder'])->name('detailUS');


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
Route::get('admin/login', [LoginAdminController::class, 'getLogin']);
Route::post('admin/login', [LoginAdminController::class, 'postLogin']);
Route::get('admin/logout', [LoginAdminController::class, 'logout']);
//Trang chủ
Route::get('admin', [IndexAdminController::class, 'show']);
Route::get('admin/IndexAdmin', [IndexAdminController::class, 'show'])->middleware('protectedPage');

//Xóa
Route::get('admin/delete/{MaSach}', [IndexAdminController::class, 'delete']);
//Sửa
Route::get('admin/edit{MaSach}', [IndexAdminController::class, 'showData']);
Route::post('admin/edit', [IndexAdminController::class, 'update']);
//Thêm
Route::view('admin/create', 'adminpages\CreateProducts');
Route::post('admin/create', [IndexAdminController::class, 'AddData']);
//Quản lý đặt hàng
Route::get('admin/OrderManagement', [OrderAdminController::class, 'showOrder']);
//Xem chi tiết đơn hàng
Route::get('admin/detailOrder/{MaDH}', [OrderAdminController::class, 'detail'])->name('detail');
//Xóa đơn hàng
Route::get('admin/deleteOrder/{MaDH}', [OrderAdminController::class, 'delete']);