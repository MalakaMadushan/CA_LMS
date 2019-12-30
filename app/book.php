<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table="books";
    protected $fillable = ['accessionNo', 'isbn', 'book_title','authors','book_category_id','language_id','publisher_id','phymedium_id','dewey_decimal_id','purchase_date','edition','price','publishyear','phydetails','rackno','rowno','note','status','br_qr_code','barrow'];
}
