<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupAnagAnagraficheTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_anag_contatti', function (Blueprint $table) {

            $table->increments('id');// int(11) NOT NULL,

            $table->integer('anagrafica_id')->unsigned()->index();// varchar(4) DEFAULT NULL,
            $table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->enum('tipo',['email','cellulare','telefono','fax','url','altro']);

            $table->string('value')->nullable()->default(null);
            $table->string('label')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_anag_contatti');
    }

}
