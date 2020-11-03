<?php

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupAnagStatiCiviliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $statiCivili = [
            1 => 'Celibe/Nubile',
            2 => 'Coniugato/a',
            3 => 'Vedovo/a',
            4 => 'Divorziato/a',
            6 => 'Unito civilmente',
            7 => 'Stato libero a seguito di decesso della parte unita civilmente',
            8 => 'Stato libero a seguito di scioglimento dell’unione',
            9 => 'Non classificabile/ignoto/n.c',
        ];

        foreach ($statiCivili as $codice => $nomeIt) {
            \App\Models\CupAnagStatoCivile::create([
                'codice' => str_pad($codice,2,'0',STR_PAD_LEFT),
                'nome_it' => $nomeIt,
            ]);
        }

    }

}
