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
//     return view('master');
// });

Route::get('/', 'EcommerceController@home')->name('home');
Route::get('/contact', 'EcommerceController@contact')->name('contact');
Route::get('/food', 'EcommerceController@foodProduct')->name('food');
Route::get('/drink', 'EcommerceController@drinkProduct')->name('drink');
Route::get('/household', 'EcommerceController@householdProduct')->name('household');
Route::get('/howtobuy', function() {return view('ecommerce.howtobuy', ['nav' => '']);})->name('howtobuy');

Route::group(['middleware' => 'web'], function () {
    Route::get(env('LARAVUE_PATH'), 'LaravueController@index')->where('any', '.*')->name('laravue');
});
