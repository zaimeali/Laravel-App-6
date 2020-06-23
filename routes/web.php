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


// Static Method: get, post, put, patch, delete, options

// Route Class
    // giving Static Path
    // Callback function
Route::get('/welcome', function(){
    return 'Welcome to my app';
});


// Route with Dynamic Parameter
    // for dynamic value, use {} this
Route::get('welcome/{name}', function($name){
    return 'Welcome ' . $name;
});


// Optional Route with Dynamic Parameter
    // But need default value => so we will give it in Parameter
Route::get('city/{city?}', function($city = "Karachi"){
    return 'Welcome to ' . $city;
});