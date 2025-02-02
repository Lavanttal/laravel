<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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
    return view('welcome');
});

Auth::routes();

Route::resource('bookings', BookingController::class);
Route::get('/rooms/{roomType?}', 'App\Http\Controllers\ShowRoomsController');
Route::resource('room_types', 'App\Http\Controllers\RoomTypeController');
