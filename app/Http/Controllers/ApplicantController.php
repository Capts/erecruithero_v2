<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class ApplicantController extends Controller
{
    public function getApplicantProfile(){

	$jobs = Job::orderby('created_at', 'desc')->paginate(10);

    	// return response(json('api_key', compact('jobs')));

    	return view('view_applicant.profile', compact('jobs'));

    	// return view('view_applicant.profile')->withJobs($jobs);
    }


}
