<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardSurveyController extends Controller
{
    public function newsurvey(){
        return view('boardOfSurvey.new_survey');
    }
    public function latestsurvey(){
        return view('boardOfSurvey.latest_survey');
    }
    public function pastsurvey(){
        return view('boardOfSurvey.past_survey');
    }
}
