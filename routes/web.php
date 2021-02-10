<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Metamask\MetamaskController;
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
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Metamask
Route::prefix('metamask')->group(function () {
    Route::get('/', [MetamaskController::class, 'index'])->name('metamask');
    Route::post('/transaction/create', [MetamaskController::class, 'create'])->name('metamask.transaction.create');
});
