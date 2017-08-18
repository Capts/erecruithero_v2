<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Skill;
use Session;
use Auth;



class ApplicationController extends Controller
{
   
   public function __construct(){
       $this->middleware('auth');
   } 

   public function getApp($id, $slug){

        $thisUser = User::find($id);
        // dd($thisUser);

        $applicant = User::where('id', $id)->with(['experience', 'address', 'profile', 'skill', 'schoolPrimary', 'schoolSecondary', 'schoolTertiary'])->first();
        // dd($applicant);



        return view('view_employer.applicants.show', compact('applicant', 'thisUser'));
   }


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
