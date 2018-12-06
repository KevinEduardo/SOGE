<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitzensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citzens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->integer('cpf')->unique();
            $table->integer('rg')->unique();
            $table->date('birthdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()l
    {
        Schema::dropIfExists('citzens');
    }
}
