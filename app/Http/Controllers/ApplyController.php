<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Application;
use App\JobUser;
use App\Job;
use Session;
use DB;
use Auth;

class ApplyController extends Controller
{

    
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      
        // 
       $getJobId = Job::where('id', $request->job_id)->first();
        // dd($getJobId);



       $applying = new JobUser;

       $applying->job_id = $request->job_id;
       $applying->user_id = $request->user_id;
       // dd($applying);
       $applying->save();

       
       Session::flash('success', 'Your application was sent!');
       return redirect()->route('jobs.show', [$applying->job_id]);
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $job = JobUser::where('id', $id)->first();

        // dd($job);
      
        if (is_null($job)) {
             return redirect()->route('jobs.show', $job->job_id);
        }else{

            $job->delete();

            Session::flash('danger', 'You canceled your application');
            return redirect()->route('jobs.show', $job->job_id);
        }
        
        
        
    }
}
