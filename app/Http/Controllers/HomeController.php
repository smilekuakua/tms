<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Student;
use App\Models\Training;
use App\Models\Trainingdays;
use App\Models\User;
use App\Models\Worker;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {


        if (Auth::id()) {

            $userType = Auth::user()->userType;


            if ($userType == "user") {
                $times = 0;
                $days = 0;
                $user = User::find(Auth::id());
                $students = Student::all();
                $applications = Application::all();
                $trainingdays = Trainingdays::all();
                $trainings = Training::all();
                $announcements = Announcement::all();


                foreach ($applications as $application) {
                    if ($application->user_id == Auth::id()) {
                        $times++;
                        foreach ($trainings as $training) {
                            if ($training->appid == $application->id) {
                                $current_training = $training;
                                foreach ($trainingdays as $trainingday) {
                                    if ($trainingday->training_id == $current_training->id) {
                                        $days++;
                                }
                            }
                        }
                    }
                }}


                foreach ($students as  $student) {
                    if ($student->uid == Auth::id()) {
                        $current_student = $student;
                    }
                }
                return view("student.dashboard", compact(["user", "current_student", "times", "days","announcements"]));
            } else if ($userType == "admin") {
            } else if ($userType == "worker") {

                $applications = Application::all();
                $students = Student::all();
                $users = User::all();
                $user = User::find(Auth::id());
                $workers = Worker::all();
                foreach ($workers as $worker) {

                    if ($worker->uid == Auth::id()) {
                        $current_worker = $worker;
                    }
                }

                return view("supervisor.dashboard", compact(["applications", "user", "current_worker", "students", "users"]));
            }
        } else {
            return redirect()->route('welcome');
        }
    }
}
