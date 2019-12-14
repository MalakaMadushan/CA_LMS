<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\member;
use App\member_category;
use Session;

class MemberController extends Controller
{
    public function addmember()
    {
        return view('member.new_member');
    }
   
    public function store(Request $request)
    {
       
        $mbr=new member;

        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'name'=>'required|max:100|min:5',
            'Address1'=>'required|max:100|min:5',
            'Address2'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'Mobile'=>'required|max:10|min:10',
            'birthday'=>'required',
            'gender'=>'required',
            'Description'=>'max:150',
            'registeredDate'=>'required',
            ]);
            
        
        $mbr->title=$request->title;
        $mbr->Category=$request->category;
        $mbr->name=$request->name;
        $mbr->address1=$request->Address1;
        $mbr->address2=$request->Address2;
        $mbr->nic=$request->nic;
        $mbr->mobile=$request->Mobile;
        $mbr->birthday=$request->birthday;
        $mbr->gender=$request->gender;
        $mbr->description=$request->Description;
        $mbr->regdate=$request->registeredDate;

        $mbr->save();
       return redirect()->back()->with('success','Member Add successfully!');

    }

    public function delete(Request $request)
    {
        $mbr1=new member;
        $mbr1=member::find($request->memid);
        $mbr1->delete();
        return redirect()->back();

    }

    public function addcategory(Request $request)
    {
        $mbr2=new member_category;
        $this->validate($request,[
            'new_data'=>'required',
            ]);
            
        $mbr2->category=$request->new_data;
        $mbr2->save();
       return redirect();

    }
}
