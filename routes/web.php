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
    return view('welcome');
});

Auth::routes();

Route::get('AdminViewAllWashes','Admin\AdminWashController@index')->name('AdminViewAllUsers');
Route::get('home','HomeController@index')->name('home');;
Route::get('AdminViewAllUsers','Admin\AdminUserController@index')->name('AdminViewAllUsers');
Route::get('AdminCreateUser','Admin\AdminUserController@create')->name('AdminCreateUser');
Route::post('AdminUserCreated','Admin\AdminUserController@store')->name('AdminUserCreated');
Route::get('AdminUpdateUser/{id}','Admin\AdminUserController@edit')->name('AdminUpdateUser');
Route::patch('AdminUserUpdated/{id}','Admin\AdminUserController@update')->name('AdminUserUpdated');
Route::delete('AdminUserDeleted/{id}','Admin\AdminUserController@destroy')->name('AdminUserDeleted');
Route::get('logoutAdmin','Admin\AdminUserController@logout')->name('logoutAdmin');
Route::get('AdminViewAllFeedbacks','FeedbackController@index')->name('AdminViewAllFeedbacks');
Route::get('Create/{id}','FeedbackController@create')->name('Create');
Route::post('Created','FeedbackController@store')->name('Created');

Route::get('requestWash','WashController@create')->name('Request');
Route::post('store','WashController@store')->name('store');
Route::get('edit/{id}','WashController@edit')->name('updateRequest');
Route::patch('update/{id}','WashController@update')->name('updating');
