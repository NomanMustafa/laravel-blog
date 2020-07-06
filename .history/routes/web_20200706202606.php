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
    Route::get('comments', 'AuthorController@comments')->name('authorComments');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
    Route::get('/posts', 'AdminController@posts')->name('adminPosts');
    Route::get('/comments', 'AdminController@comments')->name('adminComments');
    Route::get('/users', 'AdminController@users')->name('adminUsers');
});
