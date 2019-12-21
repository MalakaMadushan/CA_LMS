<?php

namespace App\Http\Controllers;
use App\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;
use App\survey;

class BoardSurveyController extends Controller
{
    public function survey(){
        $data=book::all();
        return view('boardOfSurvey.survey')->with('Bdata',$data);
    }
    public function surveyhistory(){
        return view('boardOfSurvey.survey_history');
    }

    public function newsurvey(){
        $c1 = DB("Connection1")->select("SELECT * from table");

        foreach($c1 as $record){

        DB("Connection2")->table("table")->insert(get_object_vars($record));

        }
    }
}
