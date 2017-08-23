<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Skill;
use App\Invitation;
use App\Job;
use DB;
use Session;
use Auth;



class ApplicationController extends Controller
{
   
   public function __construct(){
       $this->middleware('auth');
   } 

   public function getApp($id, $slug, $job_id){

        $thisUser = User::find($id);

        $getJobId = Job::where('id', $job_id)->first();
        // dd($getJobId);

        $applicant = User::where('id', $id)->with(['experience', 'address', 'profile', 'skill', 'schoolPrimary', 'schoolSecondary', 'schoolTertiary'])->first();
        // dd($applicant);

        $getStatus = DB::table('invitations')
                        ->where('user_id', $thisUser->id)
                        ->where('job_id', $job_id)
                        ->first();

        // dd($getStatus);

        return view('view_employer.application.show', compact('applicant', 'thisUser', 'getJobId', 'getStatus'));
   }

   public function inviteApplicant($id, Request $request){

      $user = User::find($id);
      $job = Job::where('id', $request->job_id)->first();
      // dd($job);


      $invitation = new Invitation();

      $invitation->user_id = $request->user_id;
      $invitation->job_id = $request->job_id;

      $invitation->save();

      Session::flash('success', 'The invitation was sent!');

      return redirect()->route('application.profile', [$user->id,$user->slug,$job->id] );

   }

   public function destroy($id, $user_id){

    $user = User::where('id', $user_id)->first();
      // dd($user);
    $invitation = Invitation::where('id', $id)->first();

        // dd($invitation);
      
        if (is_null($invitation)) {
             return redirect()->route('application.profile', [$user->id,$user->slug,$invitation->id]);
             // return redirect()->back();
        }else{

            $invitation->delete();

            Session::flash('danger', 'You canceled your application');
            return redirect()->route('application.profile', [$user->id,$user->slug,$invitation->id]);

        }
   }
  
}
