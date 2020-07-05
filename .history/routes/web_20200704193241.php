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
Route::get('post/{id}', 'PublicControler@singlePost')->name('singlePost');
Route::get('/about', 'PublicControler@about')->name('about');
Route::get('/contect', 'PublicControler@contect')->name('contect');
Route::post('/contect', 'PublicControler@contectPost')->name('contectPost');

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function(){
    Route::get('/' , 'AdminController@dashboard')->name('adminDashboard');
}