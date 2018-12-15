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
            $table->integer('parent_id')->unsigned();
            $table->string("fullname");
            $table->string("gender");
            $table->date("birthdate");
            $table->text('address');
            $table->text('hometown');
            $table->text('hometown_UF');
            $table->text('govaid'); // Bolsa Família/Escola
            $table->text('nis');
            $table->boolean('private_transport')->default(false);
            $table->text('birthcertificate');
            $table->text('ethnicity'); // RAÇA/COR
            // Branca (    )     Preta (   )    Parda  (   )      Amarela (    )      Indígena  (    )      Não declarada  (   )
            $table->boolean('can_be_exposed')->default(false);
            $table->foreign('parent_id')
                  ->references('id')
                  ->on('parents')
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
        Schema::dropIfExists('offsprings');
    }
}
