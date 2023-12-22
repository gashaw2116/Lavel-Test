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
/*

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function() {
    return view('about');
});
Route::get('/cart', function() {
    return view('cart');
});
Route::get('/products', function() {
    return view('products');
});
*/
//Route::get('/post','App\Http\Controllers\PostController@index');
//Route::get('/post/{id}','App\Http\Controllers\PostController@show');
//Route::resource('/post','App\Http\Controllers\PostController');
/*Route::resources(
    [
    'posts'=>'\App\Http\Controllers\PostController',
    'students'=>'\App\Http\Controllers\StudentController'
    ]
    );
    Route::resource('student','\App\Http\Controllers\StudentController',
    [
        'except' => ['create','show']
    ]); */
    Route::get('/tests/text','App\Http\Controllers\TestController@text');