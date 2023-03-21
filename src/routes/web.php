<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PhotosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Hello World';
});

Route::get('/{name}/', [GreetingController::class, 'greet']);

Route::get('/{type}/{first}/{second}', [CalculatorController::class, 'calculate']
)->where(['type' => '[a-z]+', 'first' => '[0-9]+', 'second' => '[0-9]+']);

Route::resource('photos', 'PhotosController');

