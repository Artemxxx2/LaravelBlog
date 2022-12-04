<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    // Categories
    Route::group(['namespace'=>'Categories' , 'prefix'=>'categories'],function(){
        Route::get('/','IndexController')->name('categoty.index');
        Route::get('/create','CreateController')->name('create.index');
        Route::post('/','StoreController')->name('store.index');
        Route::get('/{category}','CategoryShowController')->name('category.show');
        Route::get('/{category}/edit','CategoryEditController')->name('category.edit');
        Route::patch('/{category}','CategoryUpdateController')->name('category.update');
        Route::delete('/{category}','CategoryDeleteController')->name('category.destroy');
     });
    //  Tags
     Route::group(['namespace'=>'Tags' , 'prefix'=>'tags'],function(){
        Route::get('/','TagsIndexController')->name('tags.index');
        Route::get('/create','TagsCreateController')->name('tags.create.index');
        Route::post('/','TagsStoreController')->name('tags.store.index');
        Route::get('/{tag}','TagsShowController')->name('tags.show');
        Route::get('/{tag}/edit','TagsEditController')->name('tags.edit');
        Route::patch('/{tag}','TagsUpdateController')->name('tags.update');
        Route::delete('/{tag}','TagsDeleteController')->name('tags.destroy');
     });
});
Auth::routes();

