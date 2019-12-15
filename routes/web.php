<?php
use App\member;
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
Route::get('/new_book', 'BookController@addbook')->name('new_book');
Route::get('/search_book', 'BookController@searchbook')->name('search_book');
Route::get('/details_book', 'BookController@detailsbook')->name('details_book');
Route::post('/savebook', 'BookController@store');

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