<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offspring_id')->unsigned();
            $table->integer('classe_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable(); // The op, if any
            $table->integer('first_school_id')->unsigned()->nullable();
            $table->integer('second_school_id')->unsigned()->nullable();
            $table->boolean('via_internet')->default(false);
            $table->boolean('random_school')->default(false);
            $table->foreign('offspring_id')
                  ->references('id')
                  ->on('offsprings')
                  ->onDelete('cascade');
            $table->foreign('classe_id')
                  ->references('id')
                  ->on('classes')
                  ->onDelete('SET NULL');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('SET NULL');
            $table->foreign('first_school_id')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('SET NULL');
            $table->foreign('second_school_id')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('SET NULL');
            $table->boolean('finished')->default(false);
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
        Schema::dropIfExists('enrollments');
    }
}
