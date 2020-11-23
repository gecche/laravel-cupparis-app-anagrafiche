<?php


return [
    'name' => 'anagrafica|anagrafiche',
    'fields' => [
        'id' => 'id',

        'fisicagiuridica' => 'persona fisica/giuridica',

        'denominazione' => 'denominazione',
        'cognome' => 'cognome',
        'nome' => 'nome',

        'alias' => 'alias',

        'codicefiscale' => 'codice fiscale',
        'partitaiva' => 'partita IVA',

        'datanascita' => 'data di nascita',

        'comunenascita_id' => 'comune di nascita',

        'nazionalita_id' => 'nazionalità',

//PERSONA GIURIDICA
        'naturagiuridica_id' => 'natura giuridica',

//PERSONA FISICA
        'sesso' => 'sesso',
        'professione_id' => 'professione',
        'stato_civile_id' => 'stato civile',

        'indirizzo' => 'indirizzo',
        'cap' => 'CAP',
        'comuneresidenza_id' => 'comune di residenza',

        'localita' => 'località',
        'numero_civico' => 'numero civico',


        'tel' => 'tel.',
        'fax' => 'fax',
        'email' => 'email',
        'pec' => 'pec',
        'url' => 'sito web',
        'cell' => 'cell.',

        'note' => 'note',
//ALTRE INFO UTILI A UNA CERTA APP (JSON)
        'app_info' => 'info aggiuntive di sistema',

        'organizzazione' => 'organizzazione',

        'attivo' => 'attiva',

        'rapplegale_id' => 'rappresentante legale',
        'nazione_id' => 'nazione',

        'contatti' => [
                'tipo' => 'tipo',
                'value' => 'valore',
                'label' => 'etichetta',
        ],
        'indirizzi' => [
            'tipologia_id' => 'tipo',
            'indirizzo' => 'indirizzo',
            'cap' => 'CAP',
            'comune_id' => 'comune',

            'localita' => 'località',
            'numero_civico' => 'numero civico',
            'persona_contatto' => 'persona di contatto',
            'note' => 'note',
        ],
    ],
    'relations' => [
        'nazionalita' => 'nazionalità|nazionalità',
        'nazione' => 'nazione|nazioni',
        'professione' => 'professione|professioni',
        'stato_civile' => 'stato civile|stati civili',
        'comuneresidenza' => 'comune di residenza|comuni di residenza',
        'comunenascita' => 'comune di nascita|comuni di nascita',
        'naturagiuridica' => 'natura giuridica|nature giuridiche',
        'rapplegale_id' => 'rappresentante legale|rappresentanti legali',
        'contatti' => 'contatto|contatti',
        'indirizzi' => 'indirizzo|indirizzi',
        'raggruppamenti' => 'raggruppamento|raggruppamenti',
    ],
    'list' => [],
    'insert' => [],
    'edit' => [],
    'view' => [],
];
