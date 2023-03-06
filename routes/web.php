<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardRoomController;
use App\Http\Controllers\DashboardFasilityController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardOrderStatusController;
use App\Http\Controllers\DashboardHotelController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;



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
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/rooms', [RoomController::class, 'index'])->middleware('auth');
Route::get('/rooms/{room:slug}', [RoomController::class, 'show'])->middleware('auth');
Route::resource('/orders', OrderController::class)->middleware('auth');
Route::get('/orders/cetak/{order}', [OrderController::class, 'cetak'])->middleware('auth');
Route::resource('dashboard/orders', DashboardOrderController::class)->except('show')->middleware('reservasi');
Route::resource('dashboard/order', DashboardOrderStatusController::class)->only(['update'])->middleware('reservasi');
Route::resource('dashboard/hotels', DashboardHotelController::class)->middleware('admin');
Route::get('/cetak/{order}', [CetakController::class, 'cetak']);
Route::get('/fasilitas', [HotelController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title' => 'dashboard'
    ]);
})->middleware('reservasi');

Route::get('/dashboard/rooms/checkSlug', [DashboardRoomController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/rooms', DashboardRoomController::class)->except('show')->middleware('admin');
Route::get('/dashboard/fasilities/checkSlug', [DashboardFasilityController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/fasilities', DashboardFasilityController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/users', UserController::class)->except('show')->middleware('admin');


?>