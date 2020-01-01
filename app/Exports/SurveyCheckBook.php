<?php

namespace App\Exports;

use App\survey_detail;
use Maatwebsite\Excel\Concerns\FromCollection;

class SurveyCheckBook implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return survey_detail::all();
    }
}
