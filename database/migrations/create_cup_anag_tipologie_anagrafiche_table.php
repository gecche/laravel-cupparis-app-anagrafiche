<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupAnagTipologieAnagraficheTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_anag_tipologie_anagrafiche', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('codice')->unique();
            $table->string('nome_it')->unique();
            $table->nullableTimestamps();
            $table->nullableOwnerships();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_anag_tipologie_anagrafiche');
    }

}
