<?php

namespace App\Exports;

use App\survey_temp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;

class SurveyTempExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $survey= DB::table('survey_temps')->select('id','accessionNo','book_title','authors','price','survey','suggestion')->get();
        // return survey_temp::all();
        return $survey;
    }

    public function headings(): array
    {
        return [
            'අනු අංකය',
            'පරිග්‍රහණ අංකය',
            'නම',
            'කතෘ',
            'වටිනාකම',
            'සමීක්ෂණය',
            'යෝජනා',
        ];
    }
}
