<?php

namespace App\Http\Controllers;
use App\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;
use App\survey;
use App\survey_temp;

class BoardSurveyController extends Controller
{
    public function survey(){
        $data=survey_temp::all();
        return view('boardOfSurvey.survey')->with('Bdata',$data);
    }
    public function surveyhistory(){
        return view('boardOfSurvey.survey_history');
    }

    public function newsurvey(){

        survey_temp::query()->truncate();
        $survey = new survey;
        DB::table('books')->select('id','accessionNo','book_title','authors','price')->orderBy('id')->chunk(500, function($bookt) {

        foreach($bookt as $record) {

            DB::table('survey_temps')->insert(get_object_vars($record));
        
            }
        });

            $data=survey_temp::all();
            return view('boardOfSurvey.survey')->with('Bdata',$data);

        
    }
}
