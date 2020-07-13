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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PublicControler@index')->name('index');
Route::get('post/{post}', 'PublicControler@singlePost')->name('singlePost');
Route::get('/about', 'PublicControler@about')->name('about');
Route::get('/contect', 'PublicControler@contect')->name('contect');
Route::post('/contect', 'PublicControler@contectPost')->name('contectPost');

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function () {
    Route::get('dashboard', 'UserController@dashboard')->name('userDashboard');
    Route::get('comments', 'UserController@comments')->name('userComments');
    Route::post('comment/{id}/delete', 'UserController@deleteComment')->name('deleteComment');
    Route::get('profile', 'UserController@profile')->name('userProfile');
    Route::post('profile', 'UserController@profilePost')->name('userProfilePost');
});

Route::prefix('author')->group(function () {
    Route::get('dashboard', 'AuthorController@dashboard')->name('authorDashboard');
    Route::get('posts', 'AuthorController@posts')->name('authorPosts');
    Route::get('posts/new', 'AuthorController@newPosts')->name('newPosts');
    Route::post('posts/new', 'AuthorController@createPost')->name('createPost');
    Route::get('post/{id}/edit', 'AuthorController@postEdit')->name('postEdit');
    Route::post('post/{id}/edit', 'AuthorController@postEditPost')->name('postEditPost');
    Route::post('post/{id}/delete', 'AuthorController@deletePost')->name('deletePost');
    Route::get('comments', 'AuthorController@comments')->name('authorComments');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
    Route::get('/posts', 'AdminController@posts')->name('adminPosts');
    Route::get('/comments', 'AdminController@comments')->name('adminComments');
    Route::get('/users', 'AdminController@users')->name('adminUsers');
    Route::get('post/{id}/edit', 'AdminController@postEdit')->name('adminPostEdit');
    Route::post('post/{id}/edit', 'AdminController@postEditPost')->name('adminPostEditPost');
    Route::post('post/{id}/delete', 'AdminController@deletePost')->name('adminDeletePost');
    Route::post('comment/{id}/delete', 'AdminController@deletComment')->name('adminDeletComment');

    Route::get('/products', 'AdminController@products')->name('adminProducts');
    Route::get('/products/new', 'AdminController@newProduct')->name('adminNewProduct');
    Route::post('/products/new', 'AdminController@newProductPost')->name('adminNewProduct');
    Route::get('/products/{id}', 'AdminController@editProduct')->name('adminEditProduct');
    Route::post('/products/{id}', 'AdminController@editProductPost')->name('adminEditProduct');
    Route::post('/products/{id}/delete', 'AdminController@deleteProduct')->name('deleteProduct');

});
Route::prefix('shop')->group(function () {
Route::get('/' , 'ShopController@index')->name('shop.index');
Route::get('product/{id}', 'ShopController@singleProduct')->name('shop.singleProduct');
Route::get('product/{id}/order', 'ShopController@orderProduct')->name('shop.orderProduct');
Route::get('product/{id}/execute', 'ShopController@executeOrder')->name('shop.executeOrder');

});