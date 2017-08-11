<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Experience;

class ExperienceController extends Controller
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
        $this->validate($request,[
                'exp_title' => 'required|max:50',
                'exp_company' => 'required|max:60',
                'exp_activities' => 'required|max:255',
                'exp_span_time' => 'required|max:50'
            ]);

        $experience = new Experience();

        $experience->user_id = Auth::user()->id;
        $experience->exp_title = $request->exp_title;
        $experience->exp_company = $request->exp_company;
        $experience->exp_activities = $request->exp_activities;
        $experience->exp_span_time = $request->exp_span_time;
        $experience->save();

        return redirect()->route('profile.index', [Auth::user()->id, Auth::user()->slug]);
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
