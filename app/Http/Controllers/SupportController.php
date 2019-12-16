<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function importexport()
    {
        return view('Support.import_export');
    }
}
