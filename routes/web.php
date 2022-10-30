<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreedsController;
use App\Http\Controllers\DogsController;

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


//BREEDS ROUTES
Route::prefix('breeds') -> group(function () {
    Route::get('index', [BreedsController::class, 'index']) -> name('index');
});

Route::resource('breeds', BreedsController::class);


//DOGS ROUTES
Route::prefix('dogs/{breed}') -> group(function () {
    Route::get('show($breed)', [DogsController::class, 'show($breed)']) -> name('show($breed)');
});

Route::resource('dogs', DogsController::class);




