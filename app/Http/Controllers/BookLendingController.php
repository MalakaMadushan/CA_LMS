<?php

namespace App\Http\Controllers;
use App\member;
use Illuminate\Http\Request;

class BookLendingController extends Controller
{
    public function issuebook(){
        return view('bookLending.issue_book');
    }
    public function returnbook(){
        return view('bookLending.return_book');
    }
    public function Issue_member(Request $request){
       $Issue_member = $request->selectOption; //**Your selected option
        //$Memberid=$request->id;



        // $Issue_member=member::find($id);
       // $Issue_member = DB::table('members')->find($Memberid);
        
        $issuememberid=$Issue_member;
       //dd($issuememberid);

       
        return response()->json(['success' => true, 'Issue_member1' => $issuememberid]);
    }

}
