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
            $table->string('isbn')->nullable();
            $table->string('book_title');
            $table->string('authors')->nullable();
            $table->string('book_category_id')->default(1);
            $table->string('language_id')->default(1);
            $table->string('publisher_id')->default(1);
            $table->string('phymedium_id')->default(1);
            $table->string('dewey_decimal_id')->default(1);
            $table->date('purchase_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('edition')->nullable();
            $table->string('price')->default(0.00);
            $table->year('publishyear')->nullable();
            $table->string('phydetails')->nullable();
            $table->string('rackno')->nullable();
            $table->string('rowno')->nullable();
            $table->string('note')->nullable();
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
