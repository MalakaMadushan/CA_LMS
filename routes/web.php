<?php
use App\member;

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

Route::get('/', 'HomeController@dashboardV1')->name('dashboard-v1');
Route::get('/dashboard', 'HomeController@dashboardV1')->name('dashboard-v1');
// Route::get('/dashboard-v2', 'HomeController@dashboardV2')->name('dashboard-v2');

//book routing path
Route::get('/new_book', 'BookController@addbook')->name('new_book');
Route::get('/search_book', 'BookController@searchbook')->name('search_book');
Route::get('/details_book', 'BookController@detailsbook')->name('details_book');
Route::post('/savebook', 'BookController@store');

//member routing path
Route::get('/new_member', 'MemberController@addmember')->name('new_member');
Route::get('/new_user', 'UserController@adduser');
Route::post('/savemember', 'MemberController@store');

Route::get('/search_member', function () {
    $Memberdata=member::all();
    return view('member.search_member')->with('Mdata',$Memberdata);

});
Route::get('/deleteMember/{id}', 'MemberController@delete');