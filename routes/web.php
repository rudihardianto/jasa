<?php

use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\MyOrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Landing\LandingController;
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

Route::resource('/', LandingController::class);
Route::get('detail_booking/{id}', [LandingController::class, 'detail_booking'])->name('detail_booking.landing');
Route::get('booking/{id}', [LandingController::class, 'booking'])->name('booking.landing');
Route::get('detail/{id}', [LandingController::class, 'detail'])->name('detail.landing');
Route::get('explore', [LandingController::class, 'explore'])->name('explore.landing');

Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], function () {
   // dashboard
   Route::resource('dashboard', MemberController::class);

   // my order
   Route::resource('order', MyOrderController::class);
   Route::get('accept/order/{id}', [LandingController::class, 'accepted'])->name('accepted.order');
   Route::get('reject/order/{id}', [LandingController::class, 'rejected'])->name('rejected.order');

   // profile
   Route::resource('profile', ProfileController::class);
   Route::get('delete_photo', [LandingController::class, 'delete'])->name('delete.photo.order');

   // request
   Route::resource('request', RequestController::class);
   Route::get('approved_request/{id}', [LandingController::class, 'approve'])->name('approve.request');

   // service
   Route::resource('service', ServiceController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');