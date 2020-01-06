<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function barcodegenarete()
    {
       return view('Reports.barcode_genarete');
    }
}
