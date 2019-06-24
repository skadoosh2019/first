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

// Example Routes
Route::get('/', 'Auth\LoginController@index');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');
// Route::view('/login', 'login.login');
// Route::view('/forgotpassword', 'login.forgotpassword');
// Route::view('/account', 'account');
// Route::view('/dashboard', 'dashboard');
// Route::view('/landing', 'landing');
// Route::view('/market', 'market');
// Route::view('/wallet', 'wallet');

//Dashboard Management
Route::get('/dashboard','DashboardController@index')->name('dashboard');
//Wallet Management
Route::get('/wallet','WalletController@index')->name('wallet');
//Market Management
Route::get('/market','MarketController@index')->name('market');
//Account Management
Route::get('/account','AccountController@index')->name('account');
//Logout Management
//Test Commit for github
//Register data
// Route::get('/registerUser','RegisterUserController@index')->name('registerUser');
Route::get('/createAccount','RegisterUserController@createAccount')->name('createAccount');
Route::get('/accountDetail','RegisterUserController@accountDetail')->name('accountDetail');
Route::get('/investorData','RegisterUserController@investorData')->name('investorData');
Route::get('/personalData','RegisterUserController@personalData')->name('personalData');
Route::get('/accreditation','RegisterUserController@accreditation')->name('accreditation');
Route::get('/review','RegisterUserController@review')->name('review');
Route::get('/submit','RegisterUserController@submit')->name('submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
