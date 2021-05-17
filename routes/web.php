<?php


use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\admin\UserController;
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
    return view('guest.landingPage');
});
Route::get('a', [LocationController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('admin')->group(function () {
        Route::resource('/users', UserController::class);
        Route::resource('/categories', App\Http\Controllers\admin\CategoryController::class);
        Route::resource('/posts', App\Http\Controllers\admin\PostController::class);
    });
});
