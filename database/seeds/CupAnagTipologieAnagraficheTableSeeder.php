<?php

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupAnagTipologieAnagraficheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipologieAnagrafiche = [
            'CLI' => 'Clienti vari',
            'FOR' => 'Fornitori vari',
            'NOFATT' => 'No fatturabili',
        ];

        foreach ($tipologieAnagrafiche as $codice => $nomeIt) {
            \App\Models\CupAnagTipologiaAnagrafica::create([
                'codice' => $codice,
                'nome_it' => $nomeIt,
            ]);
        }

    }
}
