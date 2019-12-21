<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\member;
use App\book;
use App\issue;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class BookLendingController extends Controller
{
    public function issuebook(){
        return view('bookLending.issue_book');
    }
    public function returnbook(){
        return view('bookLending.return_book');
    }
    public function Memberview(Request $request)
    {
       
        $memID = $request->memberid;
        $mbr=member::find($memID);
        return response()->json(['member_nme' => $mbr->name,'member_id'=>$mbr->id,'member_adds'=>$mbr->address1]);
        
        
    }

    public function barrowbookview(Request $request)
    {

        $data2 = book::where('accessionNo',$request->bookid)->get();
        return response()->json($data2);
        // return response()->json(['B_acc' => $data->accessionNo,'B_nme' => $data->book_title,'B_id'=>$data->id,'B_ath'=>$data->authors]);
    }

    public function SaveIssue(Request $request)
    {
        
        $mbr=new issue;
        $mbr->Memberid=$request->mem_id;
        $mbr->Bookid=$request->Bookid;
        $mbr->Issuedate=$request->dteissue;
        $mbr->Return=0;

        $mbr->save();
        return response()->json(['issue' => 'success']);

    }
}
