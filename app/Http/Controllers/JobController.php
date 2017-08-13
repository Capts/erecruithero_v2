<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Job;
use App\Skill;
use Auth;
use Session;

class JobController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function search(){
        $search = \Request::get('search');
        
        $searchjobs = Job::where('job_title', 'like','%'.$search.'%')->whereNull('status')->orderBy('created_at', 'desc')->paginate(15);



        $qualified = Skill::where('skill_name', 'like', '%'.$search.'%')->paginate(15);
        // dd($qualified);
        return view('view_employer.job.searchjobs', compact('searchjobs', 'search', 'qualified'));


    }

    public function arc(){

        $archived = Job::where('status', 'archived')->paginate(10);

        return view('view_employer.job.archived', compact('archived'));
    }

    public function index()
    {   

        $countJob = Job::count();
        $countArchive = Job::where('status', 'archived')->count();
        $countAvailable = Job::where('status', '')->count();


        $jobs = Job::whereNull('status')->orderBy('created_at', 'desc')->paginate(15);

        return view('view_employer.job.index', compact('jobs', 'countJob', 'countArchive', 'countAvailable'));
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
                $jobs->salary = 'To be discussed';
            }else{
                $jobs->salary = $request->salary;
            }

            $jobs->due_date = $request->due_date;
            $jobs->save();

            Session::flash('success','Job successfully posted');
            return redirect()->route('job.show', $jobs->id);
       

         
    }

     public function show($id)
    {
        $job = Job::find($id);

        return view('view_employer.job.show', compact('job')); 
    }



   
    public function update(Request $request, $id)
    {
       $job = Job::find($id);


        if (\Request::has('btnArchive')) {
            $job->status = 'archived';
            $job->save();

            Session::flash('success', 'This job has been archived by' . '  ' .Auth::user()->firstname );
            return redirect()->route('job.show', $job->id);
        }
        if(\Request::has('btnUpdate')){
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
               $job->salary = 'To be discussed';
           }else{
               $job->salary = $request->input('salary');
           }

           $job->due_date = $request->input('due_date');
           $job->Save();

            Session::flash('success', 'This job has been updated by' . '  ' .Auth::user()->firstname );
           return redirect()->route('job.show', $job->id);
        }

         if (\Request::has('btnUnarchive')) {
            $job->status = '';
            $job->due_date = $request->input('due_date');
            $job->save();

            Session::flash('success', 'This job is now available');
            return redirect()->route('job.show', $job->id);
        }
    }

    public function setArchive(Request $requests, $id){

    }

    
    public function destroy($id)
    {
        //
    }
}
