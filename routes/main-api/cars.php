<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cars\ApiCarsController;
use App\Http\Controllers\Cars\ApiCarController;
use App\Http\Controllers\Mails\MailController;

Route::get('list', [ApiCarsController::class, 'list'])->name('list');
Route::get('show/{id}', [ApiCarController::class, 'show'])->name('show');
Route::post('create', [ApiCarController::class, 'create'])->name('create');
Route::put('update/{id}', [ApiCarController::class, 'update'])->name('update');
Route::delete('destroy/{id}', [ApiCarController::class, 'destroy'])->name('destroy');
Route::get('sendEmail/{id}', [MailController::class, 'sendEmail'])->name('sendEmail');
