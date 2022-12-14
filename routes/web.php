<?php

use App\Http\Controllers\RegularController;
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
    return view('welcome');
});

Route::group([
    'prefix' => 'test',
    'as' => 'test.'
],function () {
    Route::group([
        'prefix' => 'regulars',
        'controller' => RegularController::class,
        'as' => ''
        ], function () {
            Route::get('',['uses' => 'index']);
        });
});
