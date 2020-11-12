<?php

use Illuminate\Database\Seeder;

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
        $this->call(CupAnagAnagraficheTableSeeder::class);

    }
}
