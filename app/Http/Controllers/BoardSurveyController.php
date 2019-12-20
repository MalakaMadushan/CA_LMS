<?php

namespace App\Http\Controllers;
use App\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;

class BoardSurveyController extends Controller
{
    public function newsurvey(){

        $bookdata = DB::table('books')
            
        ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
        ->join('book_languages', 'books.language_id', '=', 'book_languages.id')
        ->join('book_publishers', 'books.publisher_id', '=', 'book_publishers.id')
        ->join('book_phymedia', 'books.phymedium_id', '=', 'book_phymedia.id')
        ->join('book_dds', 'books.dewey_decimal_id', '=', 'book_dds.id')
        ->get();
        return view('boardOfSurvey.new_survey')->with('Bdata',$bookdata);






        //return view('boardOfSurvey.new_survey');
    }
    public function latestsurvey(){
        return view('boardOfSurvey.latest_survey');
    }
    public function pastsurvey(){
        return view('boardOfSurvey.past_survey');
    }
}
