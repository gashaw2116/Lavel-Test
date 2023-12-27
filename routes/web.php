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
*/
Route::get('/cart', function() {
    return view('cart');
});
Route::get('/products', function() {
    return view('products');
});
/*
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
    //Route::get('/tests/text','App\Http\Controllers\TestController@text');
    //Route::get('/tests/view','App\Http\Controllers\TestController@view');
    Route::get('/tests/pdf','App\Http\Controllers\TestController@pdf');
    Route::get('/tests/img','App\Http\Controllers\TestController@img');

    Route::get('/pages/contact','App\Http\Controllers\PagesController@contact');
    Route::get('/pages/employees','App\Http\Controllers\PagesController@employees');
    Route::get('/pages/employee_list','App\Http\Controllers\PagesController@employee_list');
    Route::get('/pages/employee_about','App\Http\Controllers\PagesController@employee_about');
    
    /*
    Route::get('about',function(){
        return view('about');
    });
    Route::get('about','App\Http\Controllers\HomeController@about');
    
    Route::get('/',function(){
        return view('index');
    });
    
    Route::get('/pages/contact1','App\Http\Controllers\PagesController@contact1');
*/

Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('about','App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products','App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name("product.show");
////

Route::get('/admin','App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products','App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
/////
Route::post('/admin/products/store','App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
Route::get('/admin/products/create','App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create");
Route::delete('/admin/products/{id}/delete','App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
//
Route::get('/admin/products/{id}/edit','App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
Route::put('/admin/products/{id}/update','App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
//////
Route::get('/posts/insert_with_image','App\Http\Controllers\Admin\AdminProductController@insertPostWithPostImage');
Route::get('/posts/{postid}/post_image)','App\Http\Controllers\Admin\AdminProductController@getPostImage');
////////

Route::get('/employees/employee_report','App\Http\Controllers\PagesController@employee_report');
Route::get('/posts/{id}/with_reprts','App\Http\Controllers\PagesController@@with_reprts');
Route::get('/posts/{id}/with_employess','App\Http\Controllers\PagesController@@with_employess');




