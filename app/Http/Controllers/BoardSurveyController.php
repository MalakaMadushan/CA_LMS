<?php

namespace App\Http\Controllers;
use App\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;
use App\survey;
use App\survey_temp;
use App\Exports\SurveyTempExport;
use Maatwebsite\Excel\Facades\Excel;
use App\survey_suggetion;

class BoardSurveyController extends Controller
{
    public function survey(){
        

        if(request()->ajax())
        {
            // $surveydata=survey_temp::all();
            $surveydata = DB::table('survey_temps')
                ->join('survey_suggetions', 'survey_temps.suggestion_id', '=', 'survey_suggetions.id')
                ->select('survey_temps.*', 'survey_suggetions.Suggetion')
                ->get();
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
        $bookcount = DB::table('survey_temps')->count();

        $survey_c = survey_temp::where('survey','1')->get();
        $survey_count = count($survey_c);

        $survey_sug=survey_suggetion::all();

        return view('boardOfSurvey.survey')->with('Bcount',$bookcount)->with('Scount',$survey_count)->with('sdata',$survey_sug);
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
        return redirect()->back();
        
    }

    // public function checkbook(Request $request)
    // {
       
    //     $data_B = survey_temp::where('accessionNo',$request->book_acc)->get();

    //     return response()->json(['book_name' => $data_B->book_title]);
        
    // }

    public function bookcheck(Request $request)
    {
       
        $data_B = survey_temp::where('accessionNo',$request->book_acc)->get();
        $data_update=survey_temp::find($data_B[0]->id);

        $data_update->survey=1;
        $data_update->suggestion_id=$request->sugge;
        $data_update->save();

        $survey_c = survey_temp::where('survey','1')->get();
        return response()->json(['book_name' => $data_B[0]->book_title,'survey_count' =>count($survey_c)]);
        
        
    }

    public function export_temp() 
    {
        return Excel::download(new SurveyTempExport, 'survey.xlsx');
    }



}
