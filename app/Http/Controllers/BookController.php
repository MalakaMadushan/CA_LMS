<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\book;
use Session;

class BookController extends Controller
{
    public function addbook()
    {
        return view('books.new_book');
    }
    
    public function searchbook()
    {
        return view('books.search_book');
    }

    public function detailsbook()
    {
        return view('books.details_book');
    }

    public function store(Request $request)
    {

        // $book =new book;
        
        // validation part add new book
        $this->validate($request,[

            'accessionNo'=>'required|max:100|min:5',
            'isbn'=>'required|max:100|min:5',
            'book_title'=>'required',
            'authors'=>'required',
            'price'=>'required',
            'purchase_date'=>'required',
            'phydetails'=>'required',
            'publishyear'=>'required',
            'bar_Qr_code'=>'required',
            'note'=>'required',

            ]);

            // $book->accessionnumber=$request->accessionnumber;

            // $book->save();
            // return redirect()->back();
    }
}
