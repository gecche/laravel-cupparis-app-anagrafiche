<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupAnagIndirizziTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_anag_indirizzi', function (Blueprint $table) {

            $table->increments('id');// int(11) NOT NULL,

            $table->integer('anagrafica_id')->unsigned();// varchar(4) DEFAULT NULL,
            $table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('tipologia_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('tipologia_id')->references('id')->on('cup_anag_tipologie_indirizzi')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->string('indirizzo')->nullable()->default(null);
            $table->string('cap',5)->nullable()->default(null);
            $table->integer('comune_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('comune_id')->references('id')->on('cup_geo_comuni')
                ->onDelete('restrict')->onUpdate('cascade');

            $table->string('localita')->nullable()->default(null);
            $table->string('numero_civico')->nullable()->default(null);
            $table->string('persona_contatto')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);

            $table->integer('ordine')->unsigned()->default(0);// varchar(4) DEFAULT NULL,
            $table->index(['anagrafica_id','ordine'],'cup_anag_ind_1');

            $table->nullableOwnerships();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_anag_indirizzi');
    }

}
