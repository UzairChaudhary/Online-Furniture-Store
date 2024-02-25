<?php

use App\Http\Controllers\cartController;
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

route::post('/upload_post', [cartController::class, 'upload']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/lamps', function () {
    return view('shop');
});
Route::get('/chairs', function () {
    return view('chairs');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/drawers', function () {
    return view('drawers');
});
Route::get('/sofas', function () {
    return view('sofas');
});
Route::get('/mirrors', function () {
    return view('mirrors');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/testing', function () {
    return view('cart/index');
});