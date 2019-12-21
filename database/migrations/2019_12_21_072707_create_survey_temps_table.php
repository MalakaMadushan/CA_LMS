<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_temps', function (Blueprint $table) {
            $table->string('surveyid');
            $table->string('bookid')->primary();
            $table->string('accessionNo');
            $table->string('book_title');
            $table->string('authors')->nullable();
            $table->string('price')->default(0.00);
            $table->string('survey');
            $table->string('userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_temps');
    }
}
