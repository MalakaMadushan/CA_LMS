<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookExport;
use App\Imports\BookImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;

class SupportController extends Controller
{
    public function importExportView()
    {
       return view('Support.import_export');
    }
    public function export() 
    {
        return Excel::download(new BookExport, 'book.xlsx');
    }
    public function import(Request $request) 
    {

        if($request->hasFile('file'))
        {
            // $data = Excel::import(new BookImport,request()->file('file'))->toArray();
            // $headers = array_keys($data[0]);
                Excel::import(new BookImport,request()->file('file'));
                return back()->with('success','Data Import successfully!');  
        }
        else
        {
            return back()->with('warning','Plese Select the Excel File');
        }
    }
    public static function codeview() 
    {
        $acc_no=Input::get('accessionNo');
        dd($acc_no);
        Input::replace(['bar_Qr_code' => 'new value']);
        //return view('member.search_member');
        return redirect()->back();
    }

}
