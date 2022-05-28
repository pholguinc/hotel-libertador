<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Bookings\BookingsController;
use App\Http\Controllers\Admin\Customers\CustomersController;
use App\Http\Controllers\Admin\Receptions\ReceptionsController;
use App\Http\Controllers\Admin\Users\UserController;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::resource('/admin/customers', CustomersController::class)->names('admin.customers');
Route::get('/admin/bookings', [BookingsController::class, 'index'])->name('admin.bookings');
Route::get('/admin/receptions', [ReceptionsController::class, 'index'])->name('receptions.index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
