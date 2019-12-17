<?php

namespace App\Exports;

use App\book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return book::all();
    }
}
