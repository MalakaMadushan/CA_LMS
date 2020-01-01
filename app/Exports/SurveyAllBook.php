<?php

namespace App\Exports;

use App\survey_detail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;

class SurveyAllBook implements FromCollection, WithHeadings, ShouldAutoSize
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
        
        $survey = survey_detail::where('surveyid',$this->id)
                ->join('survey_suggetions', 'survey_details.suggestion_id', '=', 'survey_suggetions.id')
                ->select('survey_details.id','survey_details.accessionNo','survey_details.book_title','survey_details.authors','survey_details.price','survey_details.survey','survey_suggetions.Suggetion','survey_details.status')
                ->get();
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
