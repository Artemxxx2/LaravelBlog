<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

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
Route::group(['namespace' => 'App\Http\Controllers\Post'],function()
{
    Route::get('/', 'IndexController')->name('index');
}
);
Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix' => 'admin'],function(){
    Route::group(['namespace'=>'Main'],function(){
       Route::get('/','IndexController');
    });
    Route::group(['namespace'=>'Categories' , 'prefix'=>'categories'],function(){
        Route::get('/','IndexController')->name('categoty.index');
     });
});
Auth::routes();

