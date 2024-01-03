<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    public function index($id)
    {
        //
        return view("evaluation.index",compact("id"));
    }


    public function store(Request $request){
        $request->validate([
            "interest" => "",
            "attendance" => "",
            "ability" => "",
            "behavior" => "",
            "overall" => "",
            "summary" => "",
            "comments" => "",
            "training_id"=> "",

        ]);
        Evaluation::create([
            "interest" => $request->interest,
            "attendance" => $request->content,
            "ability" => $request->ability,
            "behavior" => $request->behavior,
            "overall" => $request->overall,
            "summary" => $request->summary,
            "comments" => $request->comments,
            "training_id" => $request->training_id,
        ]);
        notify()->success('Announce created');

            return redirect()->route('home');
    }
}
