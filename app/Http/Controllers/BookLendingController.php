<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\member;
use App\book;
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
        return response()->json(['success' => true, 'member_nme' => $mbr->name,'member_id'=>$mbr->id,'member_adds'=>$mbr->address1]);
    }

    public function barrowbookview(Request $request)
    {

        // $this->validate($request,[
        //     'member_id1'=>'required',
        //     ]);

        $data2 = book::where('accessionNo',$request->bookid)->get();
        return response()->json($data2);
    }
}
