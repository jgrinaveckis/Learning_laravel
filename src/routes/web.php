<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{name}/', function (string $name) {
    return $name;
});

Route::get('/{type}/{first}/{second}', function (string $type,string $first, string $second) {
    if ($type == "sum") {
        $sum = intval($first) + intval($second);
        return $sum;
    }
    elseif ($type == "subtract") {
        $sum = intval($first) - intval($second);
        return $sum;
    }
    elseif ($type == "multiply") {
        $sum = intval($first) * intval($second);
        return $sum;
    }
    elseif ($type == "divide") {
        $sum = intval($first) / intval($second);
        return $sum;
    }
    else {
        return "Please provide argument";
    }

})->where(['type' => '[a-z]+', 'first' => '[0-9]+', 'second' => '[0-9]+']);

