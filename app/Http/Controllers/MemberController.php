<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\member;
use App\member_category;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class MemberController extends Controller
{
 
    public function updateview($id)
    {
        $mbr=member::find($id);
        //$mbr = DB::table('members')->find($id);
        $Memberdata=member_category::all();
        return view('member.update_member')->with('selectdata',$mbr)->with('Mdata',$Memberdata);   
    }

    public function updateview_modal($id)
    {
        $mbr=member::find($id);
        //$mbr = DB::table('members')->find($id);
        $Memberdata=member_category::all();
        return view('member.update_member_modal');   
    }
    public function newmember()
    {
        $Memberdata=member_category::all();
        return view('member.new_member')->with('Mdata',$Memberdata);
    }
    public function back()
    {
        echo "<script>";
        echo "window.close();";
        echo "</script>";
    }

    public function allmember()
    {
        $Memberdata = DB::table('members')
        ->join('member_categories', 'members.categoryid', '=', 'member_categories.id')
        ->select('members.*', 'member_categories.category')
        ->get();
        return view('member.search_member')->with('Mdata',$Memberdata);
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
        $mbr->Categoryid=$request->category;
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

    public function updatemember(Request $request)
    {
        
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
        $mbr=member::find($request->id);

        $mbr->title=$request->title;
        $mbr->Categoryid=$request->category;
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
        echo "<script>";
        echo "window.close();";
        echo "</script>";
        $Memberdata = DB::table('members')->join('member_categories', 'members.categoryid', '=', 'member_categories.id')->get();
        return view('member.search_member')->with('Mdata',$Memberdata)->with('success','Member Add successfully!');
    }

    public function delete(Request $request)
    {
        $mbr=new member;
        $mbr=member::find($request->memid);
        $mbr->delete();
        return redirect()->back();

    }

    public function addcategory(Request $request)
    {
        $mbr=new member_category;
        $this->validate($request,[
            'new_data'=>'required|max:50|min:3'
            ]);

                $mbr->category=$request->new_data;
                $mbr->save();
                return redirect()->back()->with('success','Category Add successfully!');

            // $validator = Validator::make($request->all(), [
            //     'new_data'=>'required|max:50|min:3'
            // ]);
            
            // if ($validator->fails()) {
            //     return redirect()->back()->with('warning','Something Went Wrong!');
            // } else {
            //     $mbr->category=$request->new_data;
            //     $mbr->save();
            //     return redirect()->back()->with('success','Category Add successfully!');
            // }
            
        

    }
}
