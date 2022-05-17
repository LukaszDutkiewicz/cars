<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cars\CarsController;
use App\Http\Controllers\Cars\CarController;

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



Route::group(
    ['prefix' => '/cars/', 'as' => 'cars.'],
    function () {

        Route::get('/list', [CarsController::class, 'list'])->name('list');

        Route::get('/show/{id}', [CarController::class, 'show'])->name('show');

        Route::get('destroy/{id}', [CarController::class, 'destroy'])->name('destroy');
    }

);



Route::get('/{any}', [HomeController::class, 'homePage'])->where('any', '.*');


// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');
