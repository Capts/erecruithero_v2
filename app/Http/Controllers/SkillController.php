<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Auth;

class SkillController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }    

    
    public function store(Request $request)
    {


        $this->validate($request, [
            'skill_name' => 'required|max:40|unique:skills,user_id',
            ]);


        // if (Skill::where('skill_name', Input::get('skill_name'))->exists()) {
        //     dd($)
        // }
        $skill = new Skill();

        $skill->user_id = Auth::user()->id;
        $skill->skill_name = $request->skill_name;
        $skill->save();

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
