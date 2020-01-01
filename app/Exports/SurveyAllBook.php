<?php

namespace App\Exports;

use App\survey_detail;
use Maatwebsite\Excel\Concerns\FromCollection;

class SurveyAllBook implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $id;

    function __construct($id) {
            $this->id = $id;
    }
    public function collection()
    {
        $survey = survey_detail::where('surveyid',$this->id)->select('accessionNo','book_title','authors','price','survey','suggestion_id','status')->get();
        return $survey;
    }
    public function headings(): array
    {
        return [
            'පරිග්‍රහණ අංකය',
            'නම',
            'කතෘ',
            'වටිනාකම',
            'සමීක්ෂණය',
            'යෝජනා',
            'තත්වය'
        ];
    }
}
