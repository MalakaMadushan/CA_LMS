<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookLendingController extends Controller
{
    public function issuebook(){
        return view('bookLending.issue_book');
    }
    public function returnbook(){
        return view('bookLending.return_book');
    }
}
