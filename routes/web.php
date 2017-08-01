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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Applicant Routes
Route::get('applicant/profile', 'ApplicantController@getApplicantProfile')->name('applicant.profile');



//Employer Route
Route::get('employer/profile', 'EmployerController@getEmployerProfile')->name('employer.profile');
	//resource routes for employer
	Route::resource('employer/job', 'JobController');
	




// Route::get('/home', 'HomeController@index')->name('home');
