<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
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

//method http
//GET, POST, PUT, PATCH, DELETE

//BASE url: http://127.0.0.1:8000/

Route::get('test',function(){
echo 'hello';
});

//list-product
Route::get('list-product',[ProductController::class, 'showProduct']);

//Slug 
// http://127.0.0.1:8000/get-product/1/iphone

Route::get('get-product/{id}',[ProductController::class, 'getProduct']);

//Parmas: 
// http://127.0.0.1:8000/update-product?id=1&name=iphone
Route::get('update-product',[ProductController::class, 'updateProduct']);

// http://127.0.0.1:8000/list-student
Route::get('thongTinSv',[StudentController::class, 'showAbout']);
