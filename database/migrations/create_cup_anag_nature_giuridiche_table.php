<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupAnagNatureGiuridicheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_anag_nature_giuridiche', function(Blueprint $table)
		{
		    $table->increments('id');
            $table->string('codice')->unique();
            $table->string('nome_it');
            $table->boolean('soggetti_residenti')->default(1);

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
		Schema::drop('cup_anag_nature_giuridiche');
	}

}
