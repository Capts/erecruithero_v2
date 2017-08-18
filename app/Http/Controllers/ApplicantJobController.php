<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\JobUser;
use Auth;
use DB;

class ApplicantJobController extends Controller
{
   
    public function __construct(){
        $this->middleware('auth');
    }

    public function searchAJob(){

        $search = \Request::get('searchApp');
        
        $searchjobs = Job::where('job_title', 'like','%'.$search.'%')->where('status', null)->orderBy('created_at', 'desc')->paginate(15);

        return view('view_applicant.jobs.searchjobs', compact('searchjobs', 'search'));
    }

    public function index()
    {   
        
        $alljobs = Job::where('status', null)->orderBy('created_at', 'desc')->paginate(15);
        // dd($alljobs);
        
        return view('view_applicant.jobs.index', compact('alljobs'));
    }

 
    public function show($id)
    {
        $job = Job::find($id);
        // dd($job);

        $getApply = DB::table('job_users')
                        ->where('user_id', Auth::user()->id)
                        ->where('job_id', $id)
                        ->first();
            // dd($getApply);

        return view('view_applicant.jobs.show',[$job->id], compact('job', 'getApply'));
    }

   


}
