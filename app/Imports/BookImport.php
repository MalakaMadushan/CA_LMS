<?php

namespace App\Imports;

use App\book;
use Maatwebsite\Excel\Concerns\ToModel;

class BookImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'accessionNo'     => $row[0],
            'isbn'    => $row[1], 
            'book_title'    => $row[2], 
            'authors'    => $row[3], 
            'book_category'    => $row[4], 
            'language'    => $row[5], 
            'publisher'    => $row[6], 
            'phymedium'    => $row[7], 
            'dewey_decimal'    => $row[8], 
            //'purchase_date'    => $row[9], 
            'edition'    => $row[10], 
            'price'    => $row[11], 
            //'publishyear'    => $row[12], 
            'phydetails'    => $row[13], 
            'rackno'    => $row[14],
            'rowno'    => $row[15],
            'note'    => $row[16],
            'br_qr_code'    => $row[17],
        ]);
    }
}
