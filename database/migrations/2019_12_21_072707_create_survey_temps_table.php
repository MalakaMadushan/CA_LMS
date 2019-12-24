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
            $table->string('id')->primary();
            $table->string('accessionNo');
            $table->string('book_title');
            $table->string('authors')->nullable();
            $table->string('price')->default(0.00);
            $table->string('survey')->default(0);
            $table->string('suggestion')->nullable();
            $table->string('surveyid')->nullable();
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
        Schema::dropIfExists('survey_temps');
    }
}
