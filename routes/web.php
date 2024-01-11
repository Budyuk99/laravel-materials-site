<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('homepage');
})->name('home');

Route::get('/about-company', function () {
    return view('about-company');
})->name('about-company');

Route::get('/contracts', function () {
    return view('contracts');
});

Route::get('/trade-marks', function () {
    return view('trade-marks');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/test-1', [
    'as' => 'test-1',
]);

Route::get('/test', [TestController::class, 'show']);