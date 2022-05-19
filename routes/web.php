<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cars\CarsController;
use App\Http\Controllers\Cars\CarController;
use App\Http\Controllers\Brands\BrandsController;
use App\Http\Controllers\Brands\BrandController;
use App\Http\Controllers\Models\ModelsController;
use App\Http\Controllers\Models\ModelController;

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

        Route::get('/models', [BrandsController::class, 'models'])->name('models');

        Route::get('destroy/{id}', [CarController::class, 'destroy'])->name('destroy');
    }

);

Route::group(
    ['prefix' => '/brands/', 'as' => 'brands.'],
    function () {
        Route::get('/list', [BrandsController::class, 'list'])->name('list');
        Route::get('destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
    }
);

Route::group(
    ['prefix' => '/models/', 'as' => 'models.'],
    function () {
        Route::get('/list', [ModelsController::class, 'list'])->name('list');
        Route::get('destroy/{id}', [ModelController::class, 'destroy'])->name('destroy');
    }
);

Route::get('/{any}', [HomeController::class, 'homePage'])->where('any', '.*');


// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');
