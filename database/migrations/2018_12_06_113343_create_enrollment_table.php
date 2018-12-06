<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('offspring_id');
            $table->unsignedInteger('classe_id')->nullable();
            $table->unsignedInteger('user_id')->nullable(); // The op, if any
            $table->unsignedInteger('first_school_id')->nullable();
            $table->unsignedInteger('second_school_id')->nullable();
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
        Schema::dropIfExists('enrollment');
    }
}
