<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('Category');
            $table->string('name');
            $table->string('address1');
            $table->string('address2');
            $table->string('nic');
            $table->string('mobile');
            $table->date('birthday');
            $table->string('gender');
            $table->string('description')->nullable();
            $table->date('regdate');
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
        Schema::dropIfExists('members');
    }
}
