<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainingdays;
use Carbon\Carbon;
class TrainingdaysController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            "departement" => "",
            "work_done" => "",
            "date" => "",
            "training_id" => "",
        ]);

        $date = Carbon::parse($request->date);


        Trainingdays::create([
            "departement" => $request->departement,
            "work_done" => $request->work_done,
            "date" => $date,
            "training_id"=>$request->training_id,


        ]);

        notify()->success('Your day has been Saved');
        return redirect()->route('training.index');
    }
}
