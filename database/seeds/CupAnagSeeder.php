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

        factory(App\Models\CupAnagAnagrafica::class, 500)->create();

        $countAnagrafiche = \App\Models\CupAnagAnagrafica::count();


        \Illuminate\Support\Facades\DB::table('cup_anag_anagrafiche')
            ->whereIn('id',[1,251])
            ->update(['organizzazione' => 1]);

        $personeFisicheIds = \App\Models\CupAnagAnagrafica::where('fisicagiuridica','F')->get()
            ->pluck('id','id')->all();
        $personeFisicheIds = array_values($personeFisicheIds);
        $personeFisicheCount = count($personeFisicheIds);
        foreach (\App\Models\CupAnagAnagrafica::where('fisicagiuridica','G')->get() as $anagrafica) {
            if (rand(0, 100) <= 75) {
                continue;
            }
            $rappLegaleId = $personeFisicheIds[rand(0, $personeFisicheCount-1)];
            $anagrafica->rapplegale_id = $rappLegaleId;
            $anagrafica->save();

        }
    }
}
