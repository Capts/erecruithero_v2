<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;
use Session;

class JobController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function search(){
        $search = \Request::get('search');
        
        $searchjobs = Job::where('job_title', 'like','%'.$search.'%')->orderBy('created_at', 'desc')->paginate(15);

        return view('view_employer.job.searchjobs', compact('searchjobs', 'search'));
    }

    public function index()
    {   
      
        $countJob = Job::count();
        $jobs = Job::orderBy('created_at', 'desc')->paginate(30);

        return view('view_employer.job.index', compact('jobs', 'countJob'));
    }


    public function create()
    {
        return view('view_employer.job.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'job_title' => 'required|max:60',
            'company' => 'required|max:60',
            'work_location' => 'required|max:100',
            'responsibilities' => 'required|min:5',
            'qualifications' => 'required|min:5',
            'due_date' => 'required'
            ]);

        $jobs = new Job();

        $jobs->user_id = Auth::user()->id;
        $jobs->job_title = $request->job_title;
        $jobs->company = $request->company;
        $jobs->work_location = $request->work_location;
        $jobs->responsibilities = $request->responsibilities;
        $jobs->qualifications = $request->qualifications;
        
        if ($request->salary == '') {
            $jobs->salary = 'To be discuss';
        }else{
            $jobs->salary = $request->salary;
        }

        $jobs->due_date = $request->due_date;
        $jobs->save();

        return redirect()->route('job.show', $jobs->id);
    }

     public function show($id)
    {
        $job = Job::find($id);

        return view('view_employer.job.show', compact('job')); 
    }

   
    public function edit($id)
    {
        $job = Job::where('id', $id)->first();
        dd($job);

        return view('view_employer.job.edit', compact('job'));
    }

   
    public function update(Request $request, $id)
    {
       $job = Job::find($id);

       $this->validate($request, [
            'job_title' => 'required|max:60',
            'company' => 'required|max:60',
            'work_location' => 'required|max:100',
            'responsibilities' => 'required|min:5',
            'qualifications' => 'required|min:5',
            'due_date' => 'required'
        ]);


       $job->job_title = $request->input('job_title');
       $job->company = $request->input('company');
       $job->work_location = $request->input('work_location');
       $job->responsibilities = $request->input('responsibilities');
       $job->qualifications = $request->input('qualifications');
       
       if ($request->salary == '') {
           $job->salary = 'To be discuss';
       }else{
           $job->salary = $request->input('salary');
       }

       $job->due_date = $request->input('due_date');
       $job->Save();

        Session::flash('success', 'You edited this job post' );
       return redirect()->route('job.show', $job->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
