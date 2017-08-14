<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Profile;
use App\Country;
use App\SchoolPrimary;
use App\SchoolSecondary;
use App\SchoolTertiary;
use App\Address;
use App\Skill;
use App\Experience;
use Session;
use Auth;

class ApplicantProfileController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index($id, $slug)
    {       

        //school
        $schoolP = SchoolPrimary::where('user_id', $id)->first();
        $schoolS = SchoolSecondary::where('user_id', $id)->first();
        $schoolT = SchoolTertiary::where('user_id', $id)->first();
        

        $getAndLoopT = SchoolTertiary::where('user_id', $id)->get();
        $getAndLoopS = SchoolSecondary::where('user_id', $id)->get();
        $getAndLoopP = SchoolPrimary::where('user_id', $id)->get();

        //profile
        $users = User::find($id);
        $profile = Profile::where('user_id', $id)->with('user')->first();
        // dd($profile);
        $id = User::find($id);
        $slug = User::find($slug);


        //SKILLS
        //get all skills and pass to view
        $loopSkills = Skill::where('user_id', $users->id)->get();

        //EXPERIENCE
        $loopExp = Experience::where('user_id', $users->id)->get();


        if (is_null($profile->bday) && is_null($profile->age) && is_null($profile->bio) && is_null($profile->civil_status)) {
        
            return view('view_applicant.profile.edit', compact('profile', 'users'));  
        } else{
            
            return view('view_applicant.profile.index', compact('users', 'id', 'slug', 'schoolP', 'schoolS', 'schoolT', 'getAndLoopT','getAndLoopS', 'getAndLoopP', 'loopSkills', 'findSkillbyId', 'loopExp'));
        }
        
        
    }



    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        // dd($users);
        // $profile = Profile::find($id);
        $countries = Country::find($id);

        return view('view_applicant.profile.update', compact('countries', 'users'));
    }


    public function update(Request $request, $id)
    {
        $users = User::find($id);

        $profile = Profile::find($id);
        
        $address = Address::where('user_id', $id)->first();

        // dd($address);

            if (isset($profile)) {
                   $profile->age = $request->input('age');
                   $profile->bio = $request->input('bio');
                   $profile->bday = $request->input('bday');
                   $profile->civil_status = $request->input('civil_status');
                   $profile->telephone = $request->input('telephone');
                   $profile->mobile = $request->input('mobile');
                   $profile->save();
            }

                
            if(isset($users)) {
                    $users->firstname = $request->input('firstname');
                    $users->lastname = $request->input('lastname');
                    $users->slug = $request->firstname. '-' . $request->lastname;
                    $users->save();
            }      

            if (isset($address)) {
               $address->street = $request->input('street');
               $address->barangay = $request->input('barangay');
               $address->city = $request->input('city');
               $address->province = $request->input('province');
               $address->country = $request->input('country');
               $address->save();
            }
        
        Session::flash('success', 'You updated your profile!' );

        return redirect()->route('profile.index', [$users->id,$users->slug]);
    }


}
