<?php

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\CupAnagAnagrafica::class, function (Faker $faker) {
    $fakerIt = FakerFactory::create('it_IT');
    $fisicaGiuridica = rand(0, 100) > 50 ? 'G' : 'F';

    $countComuni = \App\Models\CupGeoComune::count();
    $countNazioni = \App\Models\CupGeoNazione::count();

    $countNatureGiuridiche = \App\Models\CupAnagNaturaGiuridica::count();
    $countProfessioni = \App\Models\CupAnagProfessione::count();
    $countStatiCivili = \App\Models\CupAnagStatoCivile::count();
    $countAnagrafiche = \App\Models\CupAnagAnagrafica::count();

    $naturaGiuridicaId = null;

    $professioneId = null;
    $statoCivileId = null;

    if ($fisicaGiuridica == 'F') {
        $cognome = $fakerIt->lastName;
        $nome = $fakerIt->lastName;
        $denominazione = $cognome . ' ' . $nome;
        $alias = '';
        $partitaIva = null;
        $codiceFiscale = $fakerIt->taxId();
        $datanascita = $fakerIt->dateTimeBetween('-100 years', '-18 years')->format('Y-m-d');
        $sesso = rand(0, 100) > 50 ? 'M' : 'F';

        $professioneId = rand(0, 100) > 20 ? rand(1, $countProfessioni) : null;
        $statoCivileId = rand(0, 100) > 5 ? rand(1, $countStatiCivili) : null;


    } else {
        $cognome = null;
        $nome = null;
        $denominazione = $fakerIt->company;
        $alias = $fakerIt->company;
        $codiceFiscale = rand(0, 100) > 90 ? $fakerIt->taxId() : null;
        $partitaIva = $codiceFiscale ?: $fakerIt->vatId();
        $partitaIva = strlen($partitaIva) > 11 ? substr($partitaIva, 2, 11) : $partitaIva;
        $datanascita = $fakerIt->dateTimeBetween('-50 years', '-6 months')->format('Y-m-d');
        $sesso = null;

        $naturaGiuridicaId = rand(0, 100) > 10 ? rand(1, $countNatureGiuridiche) : null;
    }

    $comuneNascitaId =  rand(1, $countComuni);
    $comuneResidenzaId =  rand(1, $countComuni);

    $comuneNascita = \App\Models\CupGeoComune::find($comuneNascitaId);
    $comuneResidenza = \App\Models\CupGeoComune::find($comuneResidenzaId);

    $nazioneNascitaId = $comuneNascita ? $comuneNascita->nazionalita_id : null;
    $nazioneResidenzaId = $comuneResidenza ? $comuneResidenza->nazionalita_id : null;
//    $codiceFattEl = rand(0,100) > 70 ? str_pad(rand(1,100000),7,'0',STR_PAD_LEFT) : "0000000";
//    $pecFattEl = $codiceFattEl == "0000000" ? null : $fakerIt->companyEmail;

    return [
        'cognome' => $cognome,
        'nome' => $nome,
        'denominazione' => $denominazione,
        'alias' => $alias,
        'fisicagiuridica' => $fisicaGiuridica,
        'codicefiscale' => $codiceFiscale,
        'partitaiva' => $partitaIva,
        'codicefiscale_errato' => false,
        'partitaiva_errata' => false,
        'datanascita' => $datanascita,

        'comunenascita_id' => $comuneNascitaId,
        'nazionalita_id' => $nazioneNascitaId,

        'naturagiuridica_id' => $naturaGiuridicaId,
        'rapplegale_id' => null,

        'sesso' => $sesso,
        'professione_id' => $professioneId,
        'stato_civile_id' => $statoCivileId,

        'indirizzo' => $fakerIt->address,
        'cap' => $fakerIt->postcode,
        'comuneresidenza_id' => $comuneResidenzaId,

        'localita' => $fakerIt->city,
        'numero_civico' => rand(1, 100),
        'nazione_id' => $nazioneResidenzaId,

        'tel' => $fakerIt->phoneNumber,
        'fax' => rand(1, 100) > 75 ? $fakerIt->phoneNumber : null,
        'email' => $fakerIt->email,
        'pec' => rand(1, 100) > 55 ? $fakerIt->companyEmail : null,
        'url' => rand(1, 100) > 65 ? $fakerIt->url : null,
        'note' => rand(1, 100) > 75 ? $fakerIt->words(5, true) : null,


        'organizzazione' => 0,
        'attivo' => rand(1, 100) > 98 ? 0 : 1,

    ];
});
