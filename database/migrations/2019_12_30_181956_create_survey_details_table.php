<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Bookid');
            $table->string('accessionNo');
            $table->string('book_title');
            $table->string('authors')->nullable();
            $table->string('price');
            $table->string('survey');
            $table->string('suggestion_id');
            $table->string('surveyid');
            $table->string('status');
            $table->string('userid')->nullable();
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
        Schema::dropIfExists('survey_details');
    }
}
