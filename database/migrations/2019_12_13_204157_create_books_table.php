<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accessionNo');
            $table->string('isbn');
            $table->string('book_title');
            $table->string('authors');
            $table->string('book_category');
            $table->string('language');
            $table->string('publisher');
            $table->string('phymedium');
            $table->string('dewey_decimal');
            $table->date('purchase_date');
            $table->string('edition');
            $table->string('price');
            $table->year('publishyear');
            $table->string('phydetails');
            $table->string('rackno');
            $table->string('rowno');
            $table->string('note');
            $table->string('br_qr_code')->nullable();
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
        Schema::dropIfExists('books');
    }
}
