<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Auth;
use Session;

class SkillController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }    

    
    public function store(Request $request)
    {


        $this->validate($request, [
            'skill_name' => 'required|min:3|max:40|unique:skills,user_id',
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

  

    public function edit($id)
    {
        $skill = Skill::find($id);

        return view('view_applicant.skill.edit_skill', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);

        $this->validate($request, [
            'skill_name' => 'required|min:3|max:40|unique:skills'
            ]);

        $skill->skill_name = $request->input('skill_name');
        $skill->save();

        return redirect()->route('profile.index', [Auth::user()->id,Auth::user()->slug]);
    }

    public function destroy($id)
    {
       $skill = Skill::find($id);

       $skill->delete();

        Session::flash('danger', 'The skill was successfully deleted!');

       return redirect()->route('profile.index', [Auth::user()->id,Auth::user()->slug]);
    }
}
