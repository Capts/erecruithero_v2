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

// Route::get('applicant/home', 'ApplicantController@home')->name('applicant.home');
Route::get('applicant/newsfeed', 'ApplicantController@feed')->name('applicant.feed');
// Route::get('applicant/profile', 'ApplicantController@profile')->name('applicant.profile');

// Route::get('applicant/profile/{profile}', 'ApplicantProfileController@index', ['except' => ['index']] )->name('profile.index');
Route::get('applicant/profile/id/{id}/{slug}', 'ApplicantProfileController@index')->name('profile.index');

Route::resource('applicant/profile', 'ApplicantProfileController', ['except' => ['index', 'show', 'destroy', 'create']]);
Route::resource('applicant/address', 'ApplicantAddressController', ['except' =>  ['index', 'destroy']]);
Route::resource('applicant/school', 'ApplicantSchoolController', ['except' =>  ['index', 'destroy', 'create']]);



//Employer Route
Route::get('employer/profile', 'EmployerController@getEmployerProfile')->name('employer.profile');
	//resource routes for employer
	Route::resource('employer/job', 'JobController');
	

//route modals
	// Route::get('/applicant/profile/{id}', 'ModalEditController@get_modal_personal')->name('personal');


// Route::get('/home', 'HomeController@index')->name('home');
