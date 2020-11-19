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
        Schema::create('cup_anag_anagrafiche', function (Blueprint $table) {

            $table->increments('id');// int(11) NOT NULL,

            $table->string('cognome')->nullable()->default(null);
            $table->string('nome')->nullable()->default(null);

            $table->string('denominazione')->nullable()->default(null);
            $table->string('alias')->nullable()->default(null);

            $table->enum('fisicagiuridica', ['F', 'G'])->nullable()->default(null);
            $table->string('codicefiscale',16)->nullable()->default(null)->unique();
            $table->string('partitaiva',11)->nullable()->default(null)->unique();

            $table->boolean('codicefiscale_errato')->nullable()->default(0);
            $table->boolean('partitaiva_errata')->nullable()->default(0);

            $table->date('datanascita')->nullable()->default(null);

            $table->integer('comunenascita_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('comunenascita_id')->references('id')->on('cup_geo_comuni')
                ->onDelete('restrict')->onUpdate('cascade');

            $table->integer('nazionalita_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('nazionalita_id')->references('id')->on('cup_geo_nazioni')
                ->onDelete('restrict')->onUpdate('cascade');

            //PERSONA GIURIDICA
            $table->integer('naturagiuridica_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('naturagiuridica_id')->references('id')->on('cup_anag_nature_giuridiche')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->integer('rapplegale_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('rapplegale_id')->references('id')->on('cup_anag_anagrafiche')
                ->onDelete('restrict')->onUpdate('cascade');

            //PERSONA FISICA
            $table->enum('sesso', ['F', 'M'])->nullable()->default(null);
            $table->integer('professione_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('professione_id')->references('id')->on('cup_anag_professioni')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->integer('stato_civile_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('stato_civile_id')->references('id')->on('cup_anag_stati_civili')
                ->onDelete('restrict')->onUpdate('cascade');

            $table->string('indirizzo')->nullable()->default(null);
            $table->string('cap',5)->nullable()->default(null);
            $table->integer('comuneresidenza_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('comuneresidenza_id')->references('id')->on('cup_geo_comuni')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->string('localita')->nullable()->default(null);
            $table->string('numero_civico')->nullable()->default(null);
            $table->integer('nazione_id')->unsigned()->index()->nullable()->default(null);// varchar(4) DEFAULT NULL,
            $table->foreign('nazione_id')->references('id')->on('cup_geo_nazioni')
                ->onDelete('restrict')->onUpdate('cascade');

            $table->string('cell')->nullable()->default(null);
            $table->string('tel')->nullable()->default(null);
            $table->string('fax')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('pec')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->string('iban',27)->nullable()->default(null);

            $table->text('note')->nullable()->default(null);
            //ALTRE INFO UTILI A UNA CERTA APP (JSON)
            $table->longText('app_info')->nullable()->default(null);

//            $table->string('codice_fatt_el',7)->default('0000000')->index();
//            $table->string('pec_fatt_el')->nullable()->default(null)->index();
//            //ALTRE INFO FATT EL (PA, ESONERATA, REGIME)
//            $table->text('info_fatt_el')->default(0);

            $table->boolean('organizzazione')->default(0)->index();
            $table->boolean('attivo')->default(1)->index();

            $table->nullableOwnerships();
            $table->nullableTimestamps();

//            $table->unique(['codicefiscale','partitaiva'],'uniq_unicoanagrafiche');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_anag_anagrafiche');
    }

}
