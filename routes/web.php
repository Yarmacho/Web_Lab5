<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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

Route::get('/newPath', function ()
{
    return view('newPath');
});

Route::get('product/{id}', 'App\Http\Controllers\TestController@getProduct');

Route::post('form', 'App\Http\Controllers\TestController@formValidation');

Route::get('form', 'App\Http\Controllers\TestController@formValidation');

Route::get('statements', 'App\Http\Controllers\TestController@statements');
