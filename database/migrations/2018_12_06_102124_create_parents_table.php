<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mother_name');
            $table->string('father_name');
            $table->boolean('is_there_a_guardian')->default(false);
            $table->string('guardian_name')->nullable();
            $table->date('mother_birthdate');
            $table->date('father_birthdate');
            $table->date('guardian_birthdate')->nullable();
            $table->string('mother_education');
            $table->string('father_education');
            $table->string('guardian_education')->nullable();
            $table->string('mother_job');
            $table->string('father_job');
            $table->string('guardian_job')->nullable();
            $table->string('mother_workplace');
            $table->string('father_workplace');
            $table->string('guardian_workplace')->nullable();
            $table->time('mother_worktime_init');
            $table->time('father_worktime_init');
            $table->time('guardian_worktime_init')->nullable();
            $table->time('mother_worktime_end');
            $table->time('father_worktime_end');
            $table->time('guardian_worktime_end')->nullable();
            $table->integer('mother_phone');
            $table->integer('father_phone');
            $table->integer('guardian_phone')->nullable();
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
        Schema::dropIfExists('parents');
    }
}
