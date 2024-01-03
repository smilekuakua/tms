<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Student;
use App\Models\Training;
use App\Models\Trainingdays;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("applications.index");
    }

    public function store(Request $request)
    {
        //

        $request->validate([
            "company_name" => "",
            "working_field" => "",
            "company_address" => "",
            "company_fax" => "",
            "company_phone" => "",
            "company_email" => "",
            "company_web_address" => "",
            "company_description" => "",
            "supervisor_name" => "",
            "supervisor_email" => "",
            "supervisor_position" => "",
        ]);
        Application::create([
            "company_name" => $request->company_name,
            "working_field" => $request->working_field,
            "company_address" => $request->company_address,
            "company_fax" => $request->company_fax,
            "company_phone" => $request->company_phone,
            "company_email" => $request->company_email,
            "company_web_address" => $request->company_web_address,
            "company_description" => $request->company_description,
            "supervisor_name" => $request->supervisor_name,
            "supervisor_surname" => $request->supervisor_surname,
            "supervisor_email" => $request->supervisor_email,
            "supervisor_position" => $request->supervisor_position,
            "user_id" => Auth()->user()->id,
        ]);
        notify()->success('Application done');
        return redirect()->route('home');
    }

    public function intern($id)
    {
        //
        $trainingdays = Trainingdays::all();
        $application = Application::find($id);
        $trainings = Training::all();
        $stat = 0;
        $users = User::all();
        $students = Student::all();
        foreach ($students as $student) {
            if ($application->user_id == $student->uid) {

                $current_student = $student;
            }
        }
        foreach ($trainings as $training) {
            if ($training->appid == $application->id) {
                $stat = 1;
                $student_training = $training;
            }
        }
        return view("supervisor.intern", compact('application', "current_student", "users", 'trainings', 'stat','student_training','trainingdays'));
    }
    public function destroy(Application $application)
    {
        //
    }
}
