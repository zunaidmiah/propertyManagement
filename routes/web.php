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
// Authentication
Route::post('/registration', 'UserAuthController@registration')->name('registration');
Route::post('/log', 'UserAuthController@log')->name('log');
Route::post('/adminLog', 'UserAuthController@adminLog')->name('adminLog');

Route::post('/rentStore', 'RentController@rentStore')->name('rentStore');

Route::post('/sellStore', 'SellController@sellStore')->name('sellStore');


// user part
Route::get('/', function () {
    return view('index');
});
Route::get('/signIn', function () {
    return view('signIn');
});
Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/seeDetails', function () {
    return view('seeDetails');
});

Route::get('/createPost', function () {
    return view('createPost');
});
Route::get('/rentPost', function () {
    return view('rentPost');
});
Route::get('/sellPost', function () {
    return view('sellPost');
});
Route::get('/userHomepage', function () {
    return view('userHomepage');
});




// Admin part
Route::get('/adminSignIn', function () {
    return view('adminSignIn');
});
Route::get('/adminHome', function () {
    return view('adminHomepage');
});
