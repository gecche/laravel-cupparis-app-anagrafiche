<?php

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupAnagTipologieIndirizziTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipologieIndirizzi = [
            1 => 'Indirizzo di consegna',
            2 => 'Domicilio',
        ];

        foreach ($tipologieIndirizzi as $codice => $nomeIt) {
            \App\Models\CupAnagTipologiaIndirizzo::create([
                'nome_it' => $nomeIt,
            ]);
        }

    }
}
