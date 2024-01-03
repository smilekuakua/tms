<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Trainingdays;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student = Student::find(Auth::id());
        $applications = Application::all();
        $trainings = Training::all();
        $trainingdays = Trainingdays::all();
        $user = auth()->user();
        $times = 0;
        $current_training = null;
        foreach ($applications as $application) {

            if ($application->user_id == Auth::id()) {
                $times++;
                foreach ($trainings as $training) {
                    if ($training->appid == $application->id) {
                        $current_training = $training;

                    }
                }
            }

        }

        return view('training.index', compact('times', 'student', 'applications', 'user', 'trainings','trainingdays','current_training'));
    }

    public function suptraining(){
        return view("supervisor.training");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //


        $application = Application::find($id);
        $users= User::all();
        $students = Student::all();
        foreach ($students as $newstudent) {
            if ($newstudent->id == $application->user_id) {

                $student = $newstudent;

            }
        }
        return view('training.create', compact('application', 'student','users' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "application" => "",
            "start_date" => "",
            "end_date" => "",

        ]);

        $to = Carbon::parse($request->end_date);
        $from = Carbon::parse($request->start_date);
        $diff_in_days = $to->diffInDays($from);
        $out = $request->application;

        Training::create([
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "appid" => $out,
            "days" => $diff_in_days,

        ]);

        notify()->success('Training Started Now');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        //
    }
}
