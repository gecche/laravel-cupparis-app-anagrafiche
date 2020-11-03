<?php

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class NatureGiuridicheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $natureResidenti = [
            2 => "Società a responsabilità limitata",
            3 => "Società per azioni",
            4 => "Società cooperative e loro consorzi iscritti nei registri prefettizi e nello schedario generale della cooperazione",
            5 => "Altre società cooperative",
            6 => "Mutue assicuratrici",
            7 => "Consorzi con personalità giuridica",
            8 => "Associazioni riconosciute",
            9 => "Fondazioni",
            10 => "Altri enti ed istituti con personalità giuridica",
            11 => "Consorzi senza personalità giuridica",
            12 => "Associazioni non riconosciute e comitati",
            13 => "Altre organizzazioni di persone o di beni senza personalità giuridica (escluse le comunioni)",
            14 => "Enti pubblici economici",
            15 => "Enti pubblici non economici",
            16 => "Casse mutue e fondi di previdenza, assistenza, pensioni o si- mili con o senza personalità giuridica",
            17 => "Opere pie e società di mutuo soccorso",
            18 => "Enti ospedalieri",
            19 => "Enti ed istituti di previdenza e di assistenza sociale",
            20 => "Aziende autonome di cura, soggiorno e turismo",
            21 => "Aziende regionali, provinciali, comunali e loro consorzi",
            22 => "Società, organizzazioni ed enti costituiti all’estero non altrimenti classificabili con sede dell’amministrazione od oggetto principale in Italia",
            23 => "Società semplici ed equiparate ai sensi dell’art. 5, comma 3, lett. b), del Tuir",
            24 => "Società in nome collettivo ed equiparate",
            25 => "Società in accomandita semplice",
            26 => "Società di armamento",
            27 => "Associazione fra artisti e professionisti",
            28 => "Aziende coniugali",
            29 => "GEIE",
            50 => "Società per azioni, aziende speciali e consorzi di cui agli artt. 23, 25 e 60 della L. 8 giugno 1990, n. 142",
        ];

        $natureNonResidenti = [


            30 => "Società semplici, irregolari e di fatto",
            31 => "Società in nome collettivo",
            32 => "Società in accomandita semplice",
            33 => "Società di armamento",
            34 => "Associazioni fra professionisti",
            35 => "Società in accomandita per azioni",
            36 => "Società a responsabilità limitata",
            37 => "Società per azioni",
            38 => "Consorzi",
            39 => "Altri enti ed istituti",
            40 => "Associazioni riconosciute, non riconosciute e di fatto",
            41 => "Fondazioni",
            42 => "Opere pie e società di mutuo soccorso",
            43 => "Altre organizzazioni di persone e di beni",
        ];


        foreach ($natureResidenti as $codice => $nomeIt) {
            \App\Models\CupAnagNaturaGiuridica::create([
                'codice' => str_pad($codice,2,'0',STR_PAD_LEFT),
                'nome_it' => $nomeIt,
                'soggetti_residenti' => 1,
            ]);
        }

        foreach ($natureNonResidenti as $codice => $nomeIt) {
            \App\Models\CupAnagNaturaGiuridica::create([
                'codice' => str_pad($codice,2,'0',STR_PAD_LEFT),
                'nome_it' => $nomeIt,
                'soggetti_residenti' => 0,
            ]);
        }

    }
}
