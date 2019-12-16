<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookExport;
use App\Imports\BookImport;
use Maatwebsite\Excel\Facades\Excel;

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
        
        $data = $request->toArray();
        $headers = array_keys($data[0]);
        //Excel::import(new BookImport,request()->file('file'));

        // if($request->hasFile('file')){
        //     $path = $request->file('file')->getRealPath();  
        //     $data = Excel::load($path, function($reader) {})->get();
        //     if($data->count()){
        //         foreach ($data as $key => $value) {
        //             $arr[] = array_keys($data[0]);
        //         }

        //         if(!empty($arr)){
        //             // \DB::table('products')->insert($arr);
        //             dd('Insert Record successfully.');
        //         }
        //     }
        // }

        return back()->with('headers',$headers)->with('data',$data);   
           
       // return back()->with('success','Data Import successfully!');
        }
        else
        {return back()->with('warning','Plese Select the Excel File');}
    }
}
