<?php
use App\member;
use App\book;
use App\member_category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('users-list', 'UserController@usersList'); 
Route::get('users', 'UserController@users');

Route::get('/', 'HomeController@dashboardV1')->name('dashboard-v1');
Route::get('/dashboard', 'HomeController@dashboardV1')->name('dashboard-v1');
// Route::get('/dashboard-v2', 'HomeController@dashboardV2')->name('dashboard-v2');

//book routing path
Route::resource('search_book', 'BookController');
Route::get('/new_book', 'BookController@addbook')->name('new_book');

// Route::get('/search_book', 'BookController@searchbook')->name('search_book');
Route::get('/details_book', 'BookController@detailsbook')->name('details_book');

Route::post('/savebook', 'BookController@store1');
// Route::post('/savebook1', 'BookController@store1')->name('search_book.store1');


// Route::get('/search_book', 'BookController@allbook');
Route::get('/search_book', 'BookController@allbook')->name('search_book.allbook');

Route::post('/deleteBook', 'BookController@delete');
Route::get('/back', 'BookController@back');
Route::post('/save_Book_category', 'BookController@addcategory');
Route::post('/save_Book_language', 'BookController@addlanguage');
Route::post('/save_Book_publisher', 'BookController@addpublisher');
Route::post('/save_Book_phymedium', 'BookController@addphymedium');
Route::post('/save_Book_Ddecimal', 'BookController@addDdecimal');
Route::post('/update_book', 'BookController@updatebook');

 Route::get('/update_book_view/{id}', 'BookController@updateview');
 


Route::any('/genarete_code', 'SupportController@codeview')->name('books.new_book');
//Route::patch('/genarete_code',['as' => 'books.new_book']);



//book lending routing path
Route::get('/issue_book', 'BookLendingController@issuebook')->name('issue_book');
Route::get('/return_book', 'BookLendingController@returnbook')->name('return_book');
Route::post('/barrowbook_d','BookLendingController@barrowbookview');
Route::post('/member_view', 'BookLendingController@Memberview');
Route::post('/issue_save', 'BookLendingController@SaveIssue');

//Board of Survey
Route::resource('survey', 'BoardSurveyController');
Route::get('/survey', 'BoardSurveyController@survey')->name('survey.survey');
Route::get('/survey_history', 'BoardSurveyController@surveyhistory');
Route::post('/new_survey', 'BoardSurveyController@newsurvey');
Route::post('/ckeck_book', 'BoardSurveyController@bookcheck');
Route::get('/export_surveytemp', 'BoardSurveyController@export_temp')->name('export_temp');






//member routing path
Route::post('/save_member', 'MemberController@store');

Route::post('/deleteMember', 'MemberController@delete');

Route::post('/save_member_cat', 'MemberController@addcategory');

Route::get('/new_member', 'MemberController@newmember');

Route::get('/search_member', 'MemberController@allmember');

Route::post('/update_member', 'MemberController@updatemember');

Route::get('/update_member_view/{id}', 'MemberController@updateview');

Route::get('/update_member_view_modal/{id}', 'MemberController@updateview_modal');

Route::get('/back', 'MemberController@back');

//Support routing Path
Route::get('export', 'SupportController@export')->name('export');
Route::get('importExportView', 'SupportController@importExportView');
Route::post('import_book', 'SupportController@import');
Route::post('/codeview', 'SupportController@codeview');


Route::get('pdfviewMember',array('as'=>'pdfviewMember','uses'=>'SupportController@pdfviewMember'));
Route::get('pdfbarcodeall',array('as'=>'pdfbarcodeall','uses'=>'SupportController@pdfbarcodeall'));
//Route::get('/pdfviewMember', 'SupportController@pdfviewMember');
