<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\SchoolPrimary;
use App\SchoolSecondary;
use App\SchoolTertiary;
use Session;

class ApplicantSchoolController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }    


    public function store(Request $request)
    {

        if ($request->invi == 'tertiary') {
            $this->validate($request, [
                'ter_school' => 'required|max:60',
                'ter_degree' => 'required|max:25',
                'ter_field_of_study' => 'required|max:50',
                'ter_major' => 'required|max:25',
                'ter_start_year' => 'required|max:25',
                'ter_end_year' => 'required|max:25'
                ]);

            $tertiary = new SchoolTertiary();
            $tertiary->user_id = Auth::user()->id;
            $tertiary->ter_school = $request->ter_school;
            $tertiary->ter_address = $request->ter_address;
            $tertiary->ter_degree = $request->ter_degree;
            $tertiary->ter_field_of_study = $request->ter_field_of_study;
            $tertiary->ter_major = $request->ter_major;
            $tertiary->ter_start_year = $request->ter_start_year;
            $tertiary->ter_end_year = $request->ter_end_year;

            $tertiary->save();
            Session::flash('success', 'You successfully added a tertiary school.');
            return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);

        }
        if($request->invi == 'secondary'){
            $this->validate($request, [
                'sec_school' => 'required|max:60',
                'sec_address' => 'required|max:60',
                'sec_start' => 'required|max:25',
                'sec_end' => 'required|max:25'
                ]);

            $secondary = new SchoolSecondary();
            $secondary->user_id = Auth::user()->id;
            $secondary->sec_school = $request->sec_school;
            $secondary->sec_address = $request->sec_address;
            $secondary->sec_start = $request->sec_start;
            $secondary->sec_end = $request->sec_end;

            $secondary->save();
            Session::flash('success', 'You successfully added a secondary school.');
            return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);

        }
        if($request->invi == 'primary'){
            $this->validate($request, [
                'pri_school' => 'required|max:60',
                'pri_address' => 'required|max:60',
                'pri_start' => 'required|max:25',
                'pri_end' => 'required|max:25'
                ]);

            $primary = new SchoolPrimary();
            $primary->user_id = Auth::user()->id;
            $primary->pri_school = $request->pri_school;
            $primary->pri_address = $request->pri_address;
            $primary->pri_start = $request->pri_start;
            $primary->pri_end = $request->pri_end;

            $primary->save();
            Session::flash('success', 'You successfully added a primary school.');
            return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);
        }
        

    }

   
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {

        

      

        // return view('view_applicant.school.edit_schoolT', compact('schoolT'));
    }

    public function update(Request $request, $id)
    {
        $schoolT = SchoolTertiary::find($id);
        $schoolS = SchoolSecondary::find($id);
        $schoolP = SchoolPrimary::find($id);
        // dd($schoolP);
       

        if ($request->invi == 'tertiary') {
            $this->validate($request, [
                'ter_school' => 'required|max:60',
                'ter_degree' => 'required|max:25',
                'ter_field_of_study' => 'required|max:50',
                'ter_major' => 'required|max:25',
                'ter_start_year' => 'required|max:25',
                'ter_end_year' => 'required|max:25'
                ]);

         
            $schoolT->user_id = Auth::user()->id;
            $schoolT->ter_school = $request->input('ter_school');
            $schoolT->ter_address = $request->input('ter_address');
            $schoolT->ter_degree = $request->input('ter_degree');
            $schoolT->ter_field_of_study = $request->input('ter_field_of_study');
            $schoolT->ter_major = $request->input('ter_major');
            $schoolT->ter_start_year = $request->input('ter_start_year');
            $schoolT->ter_end_year = $request->input('ter_end_year');

            $schoolT->save();
            Session::flash('success', 'You successfully edited a tertiary school.');
            return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);

        }
        if($request->invi == 'secondary'){
            $this->validate($request, [
                'sec_school' => 'required|max:60',
                'sec_address' => 'required|max:60',
                'sec_start' => 'required|max:25',
                'sec_end' => 'required|max:25'
                ]);

          
            $schoolS->user_id = Auth::user()->id;
            $schoolS->sec_school = $request->input('sec_school');
            $schoolS->sec_address = $request->input('sec_address');
            $schoolS->sec_start = $request->input('sec_start');
            $schoolS->sec_end = $request->input('sec_end');

            $schoolS->save();
            Session::flash('success', 'You successfully edited a secondary school.');
            return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);

        }
        if($request->invi == 'primary'){
            $this->validate($request, [
                'pri_school' => 'required|max:60',
                'pri_address' => 'required|max:60',
                'pri_start' => 'required|max:25',
                'pri_end' => 'required|max:25'
                ]);

        
            $schoolP->user_id = Auth::user()->id;
            $schoolP->pri_school = $request->input('pri_school');
            $schoolP->pri_address = $request->input('pri_address');
            $schoolP->pri_start = $request->input('pri_start');
            $schoolP->pri_end = $request->input('pri_end');

            $schoolP->save();
            Session::flash('success', 'You successfully edited a primary school.');
            return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);
        }
    }

    public function destroy($id)
    {


        $schoolT = SchoolTertiary::find($id);
        $schoolS = SchoolSecondary::find($id);
        $schoolP = SchoolPrimary::find($id);
        // dd($schoolT);

        $schoolT->delete();
        $schoolS->delete();
        $schoolP->delete();

        

        // Session::flash('danger', 'You successfully removed your school');
        // return redirect()->route('profile.index', [Auth::user()->id,Auth::user()->slug]);
    }
}
