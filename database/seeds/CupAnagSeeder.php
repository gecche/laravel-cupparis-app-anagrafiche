<?php

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupAnagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CupAnagNatureGiuridicheTableSeeder::class);
        $this->call(CupAnagProfessioniTableSeeder::class);
        $this->call(CupAnagStatiCiviliTableSeeder::class);


    }
}
