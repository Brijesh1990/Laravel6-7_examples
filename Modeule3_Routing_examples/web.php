<?php

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


//basic routing

// Route::get('/', function(){

//     return "Welcome in laravel My name is Brijesh Kumar Pandey";

// });

// Route::get('/damini', function(){

//     return "<h2>Welcome in laravel Brijesh Kumar Pandey</h2>";
// });

// Route::get('/kiran', function(){

//     return "<h2 style='color:red'>Welcome in laravel My name is : Kiran</h2>";


// });
  


//Route parameter in routing
// Route::get('/{id}', function($id){
// return "My id is :".$id;
// });

//required parameter
// Route::get('/{name?}', function($name='Brijesh'){
//     return "My name is  :".$name;
// });


//old templates

// Route::get('/','HomeController@index');
// Route::get('/AboutUs','AboutUs@index');    


//new templates integerations

// Route::get('/','EshopperController@index');
// Route::get('/AboutUs','AboutUs@index');
// Route::get('/CreateAccount','MyAccount@index');
// Route::get('/Register','Register@index');
// Route::get('/MensProducts','MensProducts@index');
// Route::get('/WomensProducts','WomensProducts@index');
// Route::get('/ViewCart','ViewCart@index');





// Route::get('/', function () {
//     return view('welcome');
// });

// //this is a ebnable to send email verification
// Auth::routes(['verify'=>true]);
// Route::get('/home', 'HomeController@index')->name('home');


// default mail send routiong here

// Route::get('/sendemail','SendEmailController@index');

// Route::post('/sendemail/send','SendEmailController@send');


//default cruids operation routing here


Route::resource('/','CrudsController');
