<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/patient/profile/create', 'PatientProfileController@create')->name('patientprofile.create');
Route::get('/patient/profile/{index}', 'PatientProfileController@index')->name('patientprofile.index');
Route::post('/patient/profile/store', 'PatientProfileController@store')->name('patientprofile.store');
Route::post('/physician/profile/store', 'PhysicianProfileController@store')->name('physicianprofile.store');
Route::get('/physician/profile/create', 'PhysicianProfileController@create')->name('physicianprofile.create');
Route::get('/physician/profile{index}', 'PhysicianProfileController@index')->name('physicianprofile.index');

//sample route
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');