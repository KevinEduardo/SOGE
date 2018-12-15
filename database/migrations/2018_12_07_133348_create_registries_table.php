<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // Waiting for consultants.
            $table->integer('classe_id')->unsigned()->nullable();
            $table->integer('enrollment_id')->unsigned()->nullable();
            $table->integer('offspring_id')->unsigned();
            $table->integer('age_at_registration'); // idade no momento da matricula
            $table->time('entry_time'); // hora de entrade
            $table->time('exit_time'); // hora de saída
            $table->text('who_picks'); // quem busca na escola
            $table->foreign('classe_id')
                  ->references('id')
                  ->on('classes')
                  ->onDelete('SET NULL');
            $table->foreign('enrollment_id')
                  ->references('id')
                  ->on('enrollments')
                  ->onDelete('SET NULL');
            $table->foreign('offspring_id')
                  ->references('id')
                  ->on('offsprings')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('registries');
    }
}
