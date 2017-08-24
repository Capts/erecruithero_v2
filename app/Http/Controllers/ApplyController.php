<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\AcceptInvite;

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
        
        

       $getJobId = Job::where('id', $request->job_id)->first();
        // dd($getJobId);
       
       $user = User::where('id', $getJobId->user_id)->first();
     



       $applying = new JobUser;

       $applying->job_id = $request->job_id;
       $applying->user_id = $request->user_id;
       $applying->invited_by = auth()->user()->id;
       $applying->invited_by_name = auth()->user()->firstname;
       $applying->invited_by_avatar = auth()->user()->avatar;
       // dd($getJobId->user_id);
       $applying->save();

       $user->notify(new AcceptInvite($applying));
       
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

    public function destroy($id, $user_id)
    {
     
        $job = JobUser::where('id', $id)->first();
        // dd($job);

        $getJobAuthorId = Job::where('id', $id)->first();
        // dd($getJobAuthorId);
        $users = User::where('id', $user_id)->first();
        // dd($user);
      
        if (is_null($job)) {
             return redirect()->route('jobs.show', $job->job_id);
        }else{
            
            $users->notifications()->delete();
            // dd($users);
             $job->delete();
            

            Session::flash('danger', 'You canceled your application');
            return redirect()->route('jobs.show', $job->job_id);
        }
        
        
        
    }
}
