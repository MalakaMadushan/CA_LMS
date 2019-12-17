<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table="books";
    protected $fillable = ['accessionNo', 'isbn', 'book_title','authors','book_category','language','publisher','phymedium','dewey_decimal','purchase_date','edition','price','publishyear','phydetails','rackno','rowno','note','br_qr_code'];
}
