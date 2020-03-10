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

Route::get('/', function () {
    echo date("Y-m-d H:i:s");
    return view('welcome');
});

//phpinfo
Route::get('/phpinfo', function () {
    phpinfo();
});

/**测试路由分组*/
Route::prefix('/test')->group(function () {
    //测试Redis(Redis设置值)
    Route::get('/redis','TestController@testRedis');
    //测试Redis(Redis取值)
    Route::get('/redis1','TestController@testRedis1');
    //测试MySQL
    Route::get('/mysql','TestController@tsetMysql');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
