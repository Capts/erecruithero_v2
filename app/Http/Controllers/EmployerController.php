<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class EmployerController extends Controller
{
	public function __construct(){
	    $this->middleware('auth');
	}
   public function getEmployerProfile(){
   	
   		$alljobs = Job::orderBy('created_at', 'desc')->get();

    	return view('view_employer.profile', compact('alljobs'));
    }

    public function feed(){
    	return view('view_employer.feed.newsfeed');
    }
}
