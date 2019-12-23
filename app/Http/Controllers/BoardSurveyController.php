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
        

        if(request()->ajax())
        {
            $surveydata=survey_temp::all();
            return datatables()->of($surveydata)
                    ->addColumn('survey', function($data){
                        if($data->survey==1)
                        {$button = '<label class="btn btn-success btn-sm"><i class="fa fa-check" ></i></label>';}
                        else
                        {$button = '<label class="btn btn-default btn-sm"><i class="fa fa-minus" ></i></label>';}
                        
                        return $button;
                        
                        
                    })
                    
                    ->rawColumns(['survey'])
                    ->make(true);
        }

        return view('boardOfSurvey.survey');
    }
    public function surveyhistory(){
        return view('boardOfSurvey.survey_history');
    }

    public function newsurvey(){

        survey_temp::query()->truncate();

        $insert_data = [];
        $json= DB::table('books')->select('id','accessionNo','book_title','authors','price')->get();

        foreach ($json as $value) {
            $data = [
                'id'               => $value->id,
                'accessionNo'      => $value->accessionNo,
                'book_title'       => $value->book_title, 
                'authors'          => $value->authors,
                'price'            => $value->price,  
            ];

            $insert_data[] = $data;
        }

        $insert_data = collect($insert_data);
        $chunks = $insert_data->chunk(500);

        foreach ($chunks as $chunk)
        {
            DB::table('survey_temps')->insert($chunk->toArray());
        }

        
    }

    public function checkbook(Request $request)
    {
       
        $data2 = survey_temp::where('accessionNo',$request->book_acc)->get();

        return response()->json(['book_name' => $data2->book_title]);
        
    }



}
