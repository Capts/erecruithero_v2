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

Route::get('applicant/newsfeed', 'ApplicantController@feed')->name('applicant.feed');

Route::get('applicant/profile/id/{id}/{slug}', 'ApplicantProfileController@index')->name('profile.index');

Route::resource('applicant/profile', 'ApplicantProfileController', ['except' => ['index', 'show', 'destroy', 'store', 'create']]);
Route::resource('applicant/address', 'ApplicantAddressController', ['except' =>  ['index', 'destroy']]);
Route::resource('applicant/school', 'ApplicantSchoolController', ['except' =>  ['index', 'destroy', 'create']]);
Route::resource('applicant/skill', 'SkillController', ['except' =>  ['index', 'show', 'create']]);
Route::resource('applicant/experience', 'ExperienceController');
Route::get('applicants/jobs', 'ApplicantJobController@searchAJob')->name('searchjob');
Route::resource('applicant/jobs', 'ApplicantJobController', ['except' => ['create', 'store', 'edit','destroy', 'update']]);

// application route




//Employer Route
Route::get('employer/newsfeed', 'EmployerController@feed')->name('employer.feed');

Route::get('employer/job/search', 'JobController@search')->name('employer.search');
Route::get('employer/job/archived', 'JobController@arc')->name('employer.arc');

	//resource routes for employer

	Route::resource('employer/job', 'JobController', ['except'=> ['edit','create']]);
	
