<?php

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupAnagProfessioniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /*
         * PRESE DA RCPOLIZZA AUTO
         */
        $professione = [
            98 => "AGENTE DI COMMERCIO/RAPPRESENTANTE",
            20 => "AGRICOLTORE",
            86 => "ALBERGATORE",
            87 => "ALTRE PROFESSIONI",
            22 => "ARTIGIANO",
            23 => "ARTISTA",
            49 => "AUTISTA/CONDUCENTE",
            24 => "BARISTA",
            51 => "CAMERIERE",
            25 => "CASALINGA",
            26 => "COMMERCIANTE",
            27 => "COMMESSO",
            28 => "DIPENDENTE PUBBLICO",
            29 => "DIRIGENTE/FUNZIONARIO",
            91 => "DISOCCUPATO",
            30 => "ECCLESIASTICO",
            32 => "FORZE ARMATE/ALTRI CORPI",
            33 => "GIORNALISTA",
            34 => "IMPIEGATO",
            35 => "IMPRENDITORE",
            58 => "INGEGNERE",
            36 => "INSEGNANTE",
            37 => "LIBERO PROFESSIONISTA",
            59 => "MAGISTRATO",
            99 => "MARITTIMO",
            60 => "MEDICO",
            61 => "NOTAIO",
            39 => "OPERAIO",
            40 => "PENSIONATO",
            41 => "PERSONALE MEDICO",
            45 => "SENZA OCCUPAZIONE",
            43 => "SPORTIVO PROFESSIONISTA",
            44 => "STUDENTE",
        ];

        foreach ($professione as $codice => $nomeIt) {
            \App\Models\CupAnagProfessione::create([
                'codice' => str_pad($codice,2,'0',STR_PAD_LEFT),
                'nome_it' => $nomeIt,
            ]);
        }

    }


}
