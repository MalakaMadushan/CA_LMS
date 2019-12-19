<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entities\Models\User;
use App\book;
use App\book_category;
use App\book_language;
use App\book_publisher;
use App\book_phymedium;
use App\book_dd;
use Session;
use App\Exports\BookExport;
use App\Imports\BookImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class BookController extends Controller
{
    public function addbook()
    {
        $Categorydata=book_category::all();
        $Languagedata=book_language::all();
        $Publisherdata=book_publisher::all();
        $Phymediumdata=book_phymedium::all();
        $Deweydecimaldata=book_dd::all();
        return view('books.new_book')->with('Cat_data',$Categorydata)->with('Lang_data',$Languagedata)->with('Pub_data',$Publisherdata)
        ->with('PhyMdm_data',$Phymediumdata)->with('DDC_data',$Deweydecimaldata);
    }
    
    public function searchbook()
    {
        return view('books.search_book');
    }

    public function detailsbook()
    {
        return view('books.details_book');
    }
    public function back()
    {
        echo "<script>";
        echo "window.close();";
        echo "</script>";
    }

    public function delete(Request $request){
        $book=new book;
        $book=book::find($request->book_id);
        $book->delete();
        return redirect()->back();
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
           
            'note'=>'required',
            // 'br_qr_code'=>'required',

            ]);

            $book->accessionNo=$request->accessionNo;
            $book->isbn=$request->isbn;
            $book->book_title=$request->book_title;
            $book->authors=$request->authors;
            $book->book_category_id=$request->book_category;
            $book->language_id=$request->language;
            $book->publisher_id=$request->publisher;
            $book->phymedium_id=$request->phymedium;
            $book->dewey_decimal_id=$request->dewey_decimal;
            $book->purchase_date=$request->purchase_date;
            $book->edition=$request->edition;
            $book->price=$request->price;
            $book->publishyear=$request->publishyear;
            $book->phydetails=$request->phydetails;
            $book->rackno=$request->rackno;
            $book->rowno=$request->rowno;
            $book->note=$request->note;
            // $book->br_qr_code=$request->br_qr_code;
            

            $book->save();
            return redirect()->back()->with('success','Book Add successfully!');
    
    }


    public function updateview($id)
    {
        $book=book::find($id);
        //$mbr = DB::table('members')->find($id);
        $Categorydata=book_category::all();
        $Languagedata=book_language::all();
        $Publisherdata=book_publisher::all();
        $Phymediumdata=book_phymedium::all();
        $Deweydecimaldata=book_dd::all();

        // dd($book);
        return view('books.update_book') ->with('selectdata',$book)->with('Cat_data',$Categorydata)->with('Lang_data',$Languagedata)->with('Pub_data',$Publisherdata)
        ->with('PhyMdm_data',$Phymediumdata)->with('DDC_data',$Deweydecimaldata);
         
    }

    public function updatebook(Request $request)
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
            $book->book_category_id=$request->book_category;
            $book->language_id=$request->language;
            $book->publisher_id=$request->publisher;
            $book->phymedium_id=$request->phymedium;
            $book->dewey_decimal_id=$request->dewey_decimal;
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
            echo "<script>";
            echo "window.close();";
            echo "</script>";
            return view('books.search_book')->with('Cat_data',$Categorydata)->with('success','Book Add successfully!');
    
    }


    public function addcategory(Request $request)
    {
        $book=new book_category;
        $this->validate($request,[
            'new_data'=>'required|max:50|min:3'
            ]);

            $book->category=$request->new_data;
                $book->save();
                return redirect()->back()->with('success','Category Add successfully!');
        }

        public function newcategory()
        {
            
        }

        public function allbook()
        {
            $bookdata = DB::table('books')
            ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
            ->join('book_languages', 'books.language_id', '=', 'book_languages.id')
            ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
            ->join('book_phymedia', 'books.phymedium_id', '=', 'book_phymedia.id')
            ->join('book_dds', 'books.dewey_decimal_id', '=', 'book_dds.id')
            ->get();
           
            return view('books.search_book')->with('Bdata',$bookdata);
            
        }

        public function addlanguage(Request $request)
        {
            $book=new book_language;
            $this->validate($request,[
                'new_data'=>'required|max:50|min:3'
                ]);
    
                $book->language=$request->new_data;
                    $book->save();
                    return redirect()->back()->with('success','Language Add successfully!');
            }

            public function addpublisher(Request $request)
            {
                $book=new book_publisher;
                $this->validate($request,[
                    'new_data'=>'required|max:50|min:3'
                    ]);
        
                    $book->publisher=$request->new_data;
                        $book->save();
                        return redirect()->back()->with('success','Publisher Add successfully!');
                }

                public function addphymedium(Request $request)
            {
                $book=new book_phymedium;
                $this->validate($request,[
                    'new_data'=>'required|max:50|min:1'
                    ]);
        
                    $book->phymedia=$request->new_data;
                        $book->save();
                        return redirect()->back()->with('success','Physical Medium Add successfully!');
                }

                public function addDdecimal(Request $request)
                {
                    $book=new book_dd;
                    $this->validate($request,[
                        'new_data'=>'required|max:50|min:2'
                        ]);
            
                        $book->ddecimal=$request->new_data;
                            $book->save();
                            return redirect()->back()->with('success','Dewey Decimal Add successfully!');
                    }

   
}
