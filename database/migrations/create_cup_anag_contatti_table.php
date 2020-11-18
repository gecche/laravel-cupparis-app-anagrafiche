<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupAnagContattiTable extends Migration
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

            $table->integer('anagrafica_id')->unsigned();// varchar(4) DEFAULT NULL,
            $table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->enum('tipo',['email','cellulare','telefono','fax','url','altro']);

            $table->string('value')->nullable()->default(null);
            $table->string('label')->nullable()->default(null);
            $table->integer('ordine')->unsigned()->default(0);// varchar(4) DEFAULT NULL,
            $table->index(['anagrafica_id','ordine'],'cup_anag_cnt_1');

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
