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

class SurveyTempExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $survey = DB::table('survey_temps')
                ->join('survey_suggetions', 'survey_temps.suggestion_id', '=', 'survey_suggetions.id')
                ->select('survey_temps.id','survey_temps.accessionNo','survey_temps.book_title','survey_temps.authors','survey_temps.price','survey_temps.survey','survey_suggetions.Suggetion')
                ->get();

                // $surveydata = survey_temp::where('surveyid',$ssid)
                // ->join('survey_suggetions', 'survey_details.suggestion_id', '=', 'survey_suggetions.id')
                // ->select('survey_details.*', 'survey_suggetions.Suggetion')
                // ->get();
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
