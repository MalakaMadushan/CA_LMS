<?php

namespace App\Exports;

use App\survey_temp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;
use App\survey;
use App\survey_detail;

class SurveyTempExport1 implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $survey = survey_temp::where('survey','0')->select('id','accessionNo','book_title','authors','price','survey',)->get();
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
        ];
    }
}
