<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class EmployerController extends Controller
{
	public function __construct(){
	    $this->middleware('auth');
	}
  

    public function feed(){
    	return view('view_employer.feed.newsfeed');
    }
}
