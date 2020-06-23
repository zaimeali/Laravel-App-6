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


// Static HTTP Method: get, post, put, patch, delete, options, head

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
    // http://127.0.0.1:8000/city
    // or
    // http://127.0.0.1:8000/city/islamabad
Route::get('city/{city?}', function($city = "Karachi"){
    return 'Welcome to ' . $city;
});



// Redirect
    // Third Parameter: Temporary or Permanent Redirect 
        // For SEO Purpose
        // default Temporary = 302 or leave it as blank
Route::redirect('/', 'city');


// Permanent Redirect
// Route::permanentRedirect('/', 'welcome');


Route::get('/nice', function(){
    return 'Very Nice App';
});

// View Route
    // will load *.blade.php file in resources/views
// Route::view('/', 'welcome');  // Laravel Method not a HTTP one
            // Commenting Permanent Redirect Method


// Route::view('/', 'welcome'); // will not work because haven't defined welcome view in a views folder


// Created a name view in a views folder
    // third param is an array to pass data to the view
// Route::view('/', 'name', ['name' => 'Zaime Ali']);  //commenting view welcome route above


Route::view('/', 'info', ['name' => 'Zaime Ali', 'age' => 22]);
    // Parameter length should not be more than 4 or 5 or else there'll be a load