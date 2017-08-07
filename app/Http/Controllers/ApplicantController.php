<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use app\Profile;

class ApplicantController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

	public function home(){
		return view('view_applicant.home');
	}

	public function feed(){
		return view('view_applicant.feed.newsfeed');
	}

	public function profile(){
		return view('view_applicant.profile.index');
	}





}
