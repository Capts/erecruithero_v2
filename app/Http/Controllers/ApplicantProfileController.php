<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Profile;
use App\Country;
use App\School;
use App\Address;
use Session;

class ApplicantProfileController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        $profile = Profile::all();
        $jobs = Job::orderBy('created_at', 'desc')->paginate(10);

        return view('view_applicant.profile', compact('jobs', 'profile'));
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

        return view('view_applicant.edit_profile', compact('profile', 'countries'));
    }


    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);

        $profile->bio = $request->input('bio');
        $profile->civil_status = $request->input('civil_status');
        $profile->bday = $request->input('bday');

        $profile->save();

        $address = Address::find($id);

        $address->street = $request->input('street');
        $address->barangay = $request->input('barangay');
        $address->city = $request->input('city');
        $address->province = $request->input('province');
        $address->country = $request->input('country');
        $address->save();

        $school = School::find($id);

        $school->school = $request->input('school');
        $school->degree = $request->input('degree');
        $school->field_of_study = $request->input('field_of_study');
        $school->major = $request->input('major');
        $school->start_year = $request->input('start_year');
        $school->end_year = $request->input('end_year');
        $school->end_year = $request->input('activities');
        $school->end_year = $request->input('school_status');

        $school->save();

        Session::flash('success', 'You updated your profile!' );

        return redirect()->route('profile.index', $profile->id);
    }

 
    public function destroy($id)
    {
        //
    }
}
