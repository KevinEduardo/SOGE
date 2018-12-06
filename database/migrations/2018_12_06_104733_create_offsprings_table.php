<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffspringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offsprings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('citzen_id');
            $table->string("fullname");
            $table->string("gender");
            $table->date("birthdate");
            $table->timestamps();
            $table->foreign('citzen_id')
                  ->references('id')
                  ->on('citzens')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offsprings');
    }
}
