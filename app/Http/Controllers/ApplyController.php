<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Application;
use App\JobUser;
use App\Job;
use Session;
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
        //
    }
}
