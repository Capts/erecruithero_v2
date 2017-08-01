<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class EmployerController extends Controller
{
   public function getEmployerProfile(){
   	
   		$alljobs = Job::orderBy('created_at', 'desc')->get();

    	return view('view_employer.profile', compact('alljobs'));
    }
}
