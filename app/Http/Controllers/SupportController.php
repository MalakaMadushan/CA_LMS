<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookExport;
use App\Imports\BookImport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use PDF;

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
    public static function codeview1() 
    {
        $acc_no=Input::get('accessionNo');
        dd($acc_no);
        Input::replace(['bar_Qr_code' => 'new value']);
        //return view('member.search_member');
        return redirect()->back();
    }

    public function codeview(Request $request)
    {
        $codebq = $request->selectOption; //**Your selected option

        // Do your DB processing
        // $this->getLeveBalance($leaveType, $empcode);
        // I assume $leaveBalance contains the value you need to show in OtherTextBox

        //$genaretedc=DNS1D::getBarcodeSVG($codebq, "C128",1,70);
        $genaretedc=$codebq;
        return response()->json(['success' => true, 'codebq' => $genaretedc]);
    }

    public function pdfviewMember(Request $request)
    {
        $Mdata = DB::table('members')->join('member_categories', 'members.categoryid', '=', 'member_categories.id')->get();

        if($request->has('download')){
            // $pdf = PDF::loadView('member.search_member',$Mdata);
            // return $pdf->download('pdfview.pdf');

            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
            
            //$pdf = PDF::loadView('member.pdfveiw_member', compact('Mdata'));
            //$pdf =  PDF::loadHTML('member.pdfveiw_member', compact('Mdata'))->setPaper('a4', 'landscape')->setWarnings(false)->save('member_all.pdf');
            $pdf = PDF::loadView('member.pdfveiw_member', compact('Mdata'))->setPaper('a4', 'landscape')->setWarnings(false);
            return $pdf->download('member_all.pdf');
        }


        //return view('member.search_member')->with('Mdata',$Memberdata);
    }

    public function pdfbarcodeall(Request $request)
    {
        $barcde = DB::table('Member')->pluck('accessionNo');
        return view('Reports.barcode_print')->with('code',$barcde);
        
        // if($request->has('download')){

        //     PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        
        //     $barcde = PDF::loadView('Reports.barcode_print', compact('barcde'))->setPaper('a4', 'landscape')->setWarnings(false);
        //     return $barcde->download('Barcode_all.pdf');
        // }

    }

}
