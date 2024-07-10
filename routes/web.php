<?php

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
//首页路由
Route::get('/', function () {
    return view('welcome');
});

//自定义的路由
Route::get("d1",[\App\Http\Controllers\Ding::class,"test"]);

//基本路由
Route::get('b1',function(){
	return 'HELLO!';
});

//视图路由
Route::view('/b2',"test");