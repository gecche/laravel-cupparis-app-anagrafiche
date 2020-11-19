<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupAnagRaggruppamentiAnagraficheTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_anag_raggruppamenti_anagrafiche', function (Blueprint $table) {

            $table->increments('id');// int(11) NOT NULL,

            $table->integer('anagrafica_id')->unsigned();// varchar(4) DEFAULT NULL,
            $table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tipologia_id')->unsigned();// varchar(4) DEFAULT NULL,
            $table->foreign('tipologia_id')->references('id')->on('cup_anag_tipologie_anagrafiche')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_anag_raggruppamenti_anagrafiche');
    }

}
