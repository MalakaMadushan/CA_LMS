<?php

namespace App\Http\Controllers;
use App\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;
use App\survey;
use App\survey_temp;
use App\survey_detail;
use App\Exports\SurveyTempExport;
use App\Exports\SurveyTempExport1;
use App\Exports\SurveyAllBook;
use App\Exports\SurveyCheckBook;
use Maatwebsite\Excel\Facades\Excel;
use App\survey_suggetion;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BoardSurveyController extends Controller
{
    public function survey(){
        

        if(request()->ajax())
        {
            // $surveydata=survey_temp::all();
            // $surveydata = DB::table('survey_temps')
            $surveydata = survey_temp::where('status',1)
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

        $survey_history=survey::all();
        return view('boardOfSurvey.survey_history')->with('Sdata',$survey_history);
    }
// ---------------------------------------------------------------------------------------------------------------
    public function newsurvey(){

        $bookcount = DB::table('books')->count();

        $removeBook = book::where('status','0')->get();
        $removeBook_count = count($removeBook);

        $svr=new survey;
        $svr->start_date=Carbon::now();
        $svr->TotalBooks=$bookcount;
        $svr->removedBooks=$removeBook_count;
        $svr->save();
        // -------------------------

        survey_temp::query()->truncate();
        $surveyID=survey::max('id');


        $insert_data = [];
        $json= DB::table('books')->select('id','accessionNo','book_title','authors','price','status')->get();
        // $json = book::where('status',1)->select('id','accessionNo','book_title','authors','price')->get();

        foreach ($json as $value) {
            $data = [
                'id'               => $value->id,
                'accessionNo'      => $value->accessionNo,
                'book_title'       => $value->book_title, 
                'authors'          => $value->authors,
                'price'            => $value->price,
                'surveyid'         => $surveyID,
                'status'           => $value->status,
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
// --------------------------------------------------------------------------------------------------------------

    public function bookcheck(Request $request)
    {
       
        $data_B = survey_temp::where('accessionNo',$request->book_acc)->get();
        $data_update=survey_temp::find($data_B[0]->id);
        if($data_B[0]->status==1)
        {
            $data_update->userid=Auth::id();
            $data_update->survey=1;
            $data_update->suggestion_id=$request->sugge;
            $data_update->save();

            $survey_c = survey_temp::where('survey','1')->get();
            return response()->json(['book_name' => $data_B[0]->book_title,'survey_count' =>count($survey_c)]); 

        }

        
        
    }
// ----------------------------------------------------------------------------------------------------------------
public function bookuncheck(Request $request)
    {
       
        $data_B = survey_temp::where('accessionNo',$request->book_acc)->get();
        $data_update=survey_temp::find($data_B[0]->id);

        $data_update->userid=Auth::id();
        $data_update->survey=0;
        $data_update->suggestion_id=$request->sugge;
        $data_update->save();

        $survey_c = survey_temp::where('survey','1')->get();
        return response()->json(['book_name' => $data_B[0]->book_title,'survey_count' =>count($survey_c)]); 
        
    }
// ----------------------------------------------------------------------------------------------------------------


    public function finalize(Request $request)
    {
        $survey_c = survey_temp::where('survey','1')->get();

        $insert_data = [];
        $json=survey_temp::all();
        $serveyIID=$json[0]->surveyid;

        foreach ($json as $value) {
            $data = [
                'Bookid'           => $value->id,
                'accessionNo'      => $value->accessionNo,
                'book_title'       => $value->book_title, 
                'authors'          => $value->authors,
                'price'            => $value->price,
                'survey'           => $value->survey,
                'suggestion_id'    => $value->suggestion_id,
                'surveyid'         => $value->surveyid,
                'status'           => $value->status,
                'userid'           => $value->userid,
            ];

            $insert_data[] = $data;
            
        }

        $insert_data = collect($insert_data);
        $chunks = $insert_data->chunk(1000);

        foreach ($chunks as $chunk)
        {
            DB::table('survey_details')->insert($chunk->toArray());
        }
        // ----------------------------
        $svr=survey::find($serveyIID);
        $svr->end_date=Carbon::now();
        $svr->surveyBooks=count($survey_c);
        $svr->finalize=1;
        $svr->save();

        survey_temp::query()->truncate();
    
        
    }
// ----------------------------------------------------------------------------------------------------------

    public function export_temp() 
    {
        return Excel::download(new SurveyTempExport, 'Survey All.xlsx');
    }

    public function export_temp1() 
    {
        return Excel::download(new SurveyTempExport1, 'Survey Uncheck.xlsx');
    }

    public function export_surveyAll(Request $request) 
    {
        return Excel::download(new SurveyAllBook($request->id), 'Survey All Books.xlsx');
    }

    public function export_surveyCheck(Request $request) 
    {
        return Excel::download(new SurveyCheckBook($request->id), 'Survey Checked Books.xlsx');
    }
   
// ----------------------------------------------------------------------------------------------------------
    
    public function survey_details(Request $request)
    {
        $ssid=$request->id;
       
        $surveydata = survey_detail::where([
            ['surveyid',$ssid],
            ['status',1]
        ])
        ->join('survey_suggetions', 'survey_details.suggestion_id', '=', 'survey_suggetions.id')
        ->select('survey_details.*', 'survey_suggetions.Suggetion')
        ->get();
        
        if(request()->ajax())
        {   
            
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
        $sve=new survey;
        $sve=survey::find($ssid);
        return view('boardOfSurvey.survey_detail')->with('Sdata',$ssid)->with('survy',$sve);
        

    }
    public function survey_details_load(Request $request)
    {
        
      
        
    }
// --------------------------------------------------------------------------------------------------------------

public function deleteSurvey(Request $request)
{
    $survey_d = survey_detail::where('surveyid',$request->servyid);
    $survey_d->delete();

    $mbr=new survey;
    $mbr=survey::find($request->servyid);
    $mbr->delete();

    return redirect()->back();

}

}
