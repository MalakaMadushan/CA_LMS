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

        $book =new book;
        
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
            'br_qr_code'=>'required',
            'note'=>'required',

            ]);

            $book->accessionNo=$request->accessionNo;
            $book->isbn=$request->isbn;
            $book->book_title=$request->book_title;
            $book->authors=$request->authors;
            $book->book_category=$request->book_category;
            $book->language=$request->language;
            $book->publisher=$request->publisher;
            $book->phymedium=$request->phymedium;
            $book->dewey_decimal=$request->dewey_decimal;
            $book->purchase_date=$request->purchase_date;
            $book->edition=$request->edition;
            $book->price=$request->price;
            $book->publishyear=$request->publishyear;
            $book->phydetails=$request->phydetails;
            $book->rackno=$request->rackno;
            $book->rowno=$request->rowno;
            $book->note=$request->note;
            $book->br_qr_code=$request->br_qr_code;
            

            $book->save();
            return redirect()->back();
    }
}
