<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cars\ApiCarsController;
use App\Http\Controllers\Cars\ApiCarController;
use App\Http\Controllers\Mails\MailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(
    ['prefix' => '/cars/', 'as' => 'cars.'],
    function () {

        Route::get('list', [ApiCarsController::class, 'list'])->name('list');
        Route::get('show/{id}', [ApiCarController::class, 'show'])->name('show');
        Route::post('create', [ApiCarController::class, 'create'])->name('create');
        Route::put('update/{id}', [ApiCarController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [ApiCarController::class, 'destroy'])->name('destroy');
        Route::get('sendEmail/{id}', [MailController::class, 'sendEmail'])->name('sendEmail');
    }
);
