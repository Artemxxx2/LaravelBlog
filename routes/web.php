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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Post'],function()
{
    Route::get('/', 'IndexController')->name('index');
}
);

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix' => 'admin','middleware'=>['auth','adminPermission']],function(){
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
     //  Posts
     Route::group(['namespace'=>'Posts' , 'prefix'=>'posts'],function(){
        Route::get('/','PostsIndexController')->name('posts.index');
        Route::get('/create','PostsCreateController')->name('posts.create.index');
        Route::post('/','PostsStoreController')->name('posts.store.index');
        Route::get('/{post}','PostsShowController')->name('posts.show');
        Route::get('/{post}/edit','PostsEditController')->name('posts.edit');
        Route::patch('/{post}','PostsUpdateController')->name('posts.update');
        Route::delete('/{post}','PostsDeleteController')->name('posts.destroy');
     });
     //  Users
     Route::group(['namespace'=>'Users' , 'prefix'=>'users'],function(){
        Route::get('/','UsersIndexController')->name('users.index');
        Route::get('/create','UsersCreateController')->name('users.create.index');
        Route::post('/','UsersStoreController')->name('users.store.index');
        Route::get('/{user}','UsersShowController')->name('users.show');
        Route::get('/{user}/edit','UsersEditController')->name('users.edit');
        Route::patch('/{user}','UsersUpdateController')->name('users.update');
        Route::delete('/{user}','UsersDeleteController')->name('users.destroy');
     });
});
Auth::routes();
