<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\member;
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
        return response()->json(['success' => true, 'member_nme' => $mbr->name." - ".$mbr->id]);
    }
}
