<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Education;
use App\MaritalStatus;
use App\WorkingArea;
use App\JobType;
use App\JobRegistrant;
use App\WorkingAreaRegistrant;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobForm()
    {
        $jobs = Job::orderBy('job_name')->paginate();
        $educations = Education::all();
        $maritalstatus = MaritalStatus::all();
        $jobType = JobType::all();
        $workingArea = WorkingArea::orderBy('working_area_name')->paginate();
        return view('pages.job-form', ['jobs'=>$jobs, 'educations'=>$educations, 'maritalstatus'=>$maritalstatus, 'workingArea'=>$workingArea, 'jobType'=>$jobType]);
        
    }

    public function saveJobRegistrant(Request $req){

        $this->validate($req, [
            'name' => 'required',
            'id_job_position' => 'required',
            'date_and_place_of_birth' => 'required',
            'school' => 'required',
            'domicile_address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'work_experience' => 'required',
            'religion' => 'required',
            'expected_salary' => 'required',
            'vacancy_information' => 'required',
            'last_GPA' => 'required',
            'CV_path_file' => 'required',
            'CV_path_file' => 'required|max:10048'
        ]);

        $file_name = time().'.'.$req->CV_path_file->extension(); 
        $req->CV_path_file->move(public_path().'\cv_job_registrant', $file_name);

        $jobRegistrant = new JobRegistrant;
        $jobRegistrant->name = $req->name;
        $jobRegistrant->id_job_position = $req->id_job_position;
        $jobRegistrant->date_and_place_of_birth = $req->date_and_place_of_birth;
        $jobRegistrant->id_last_education = $req->id_last_education;
        $jobRegistrant->school = $req->school;
        $jobRegistrant->major = $req->major;
        $jobRegistrant->domicile_address = $req->domicile_address;
        $jobRegistrant->phone_number = $req->phone_number;
        $jobRegistrant->email = $req->email;
        $jobRegistrant->work_experience = $req->work_experience;
        $jobRegistrant->id_marital_status = $req->id_marital_status;
        $jobRegistrant->religion = $req->religion;
        $jobRegistrant->expected_salary = $req->expected_salary;
        $jobRegistrant->id_type_of_job = $req->id_type_of_job;
        $jobRegistrant->vacancy_information = $req->vacancy_information;
        $jobRegistrant->last_GPA = $req->last_GPA;
        $jobRegistrant->CV_path_file = $file_name;
        $jobRegistrant->save();

        foreach ($req->working_area as $value) {
            $workingAreaRegistrant = new WorkingAreaRegistrant;
            $workingAreaRegistrant->id_job_registrant = $jobRegistrant->id;
            $workingAreaRegistrant->id_working_area = $value;
            $workingAreaRegistrant->save();
        }

        return back()->with('success', 'Your form has been submitted.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
