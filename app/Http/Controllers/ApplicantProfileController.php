<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Profile;
use App\Country;
use App\SchoolPrimary;
use App\SchoolSecondary;
use App\SchoolTertiary;
use App\Address;
use Session;
use Auth;

class ApplicantProfileController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index($id, $slug)
    {       
        // $user = User::all();
        // $schoolPfind = SchoolPrimary::find($id);
        $schoolP = SchoolPrimary::find($id);

        // $schoolSfind = SchoolSecondary::find($id);
        $schoolS = SchoolSecondary::find($id);


        $schoolT = SchoolTertiary::find($id);


        $getAndLoopT = SchoolTertiary::where('user_id', $id)->get();
        $getAndLoopS = SchoolSecondary::where('user_id', $id)->get();
        $getAndLoopP = SchoolPrimary::where('user_id', $id)->get();

        $profile = Profile::find($id);
        $id = User::find($id);
        $slug = User::find($slug);

        if (is_null($profile->bday) && is_null($profile->age) && is_null($profile->bio) && is_null($profile->civil_status)) {
            return view('view_applicant.profile.edit', compact('profile'));
        } else{
            
            return view('view_applicant.profile.index', compact('id', 'slug', 'schoolP', 'schoolS', 'schoolT', 'getAndLoopT','getAndLoopS', 'getAndLoopP'));
        }
        
        
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $profile = Profile::find($id);
        $countries = Country::find($id);

        return view('view_applicant.profile.edit', compact('profile', 'countries'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $profile = Profile::find($id);
        if (isset($profile)) {
            $profile->bio = $request->input('bio');
            $profile->civil_status = $request->input('civil_status');
            $profile->age = $request->input('age');
            $profile->bday = $request->input('bday');

            $profile->save();
        }
        

        // $address = Address::find($id);

        // $address->street = $request->input('street');
        // $address->barangay = $request->input('barangay');
        // $address->city = $request->input('city');
        // $address->province = $request->input('province');
        // $address->country = $request->input('country');
        // $address->save();

        // $school = School::find($id);

        // $school->school = $request->input('school');
        // $school->degree = $request->input('degree');
        // $school->field_of_study = $request->input('field_of_study');
        // $school->major = $request->input('major');
        // $school->start_year = $request->input('start_year');
        // $school->end_year = $request->input('end_year');
        // $school->end_year = $request->input('activities');
        // $school->end_year = $request->input('school_status');

        // $school->save();
         // dd($user);
        Session::flash('success', 'You updated your profile!' );

        return redirect()->route('profile.index', [$user->id,$user->slug]);
    }

 
    public function destroy($id)
    {
        //
    }
}
