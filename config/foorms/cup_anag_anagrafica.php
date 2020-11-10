<?php


return [

    'search' => [
        "fields" => [
            "id" => [
                'operator' => '=',
            ],
            "denominazione" => [
                'operator' => 'like',
            ]
        ],

    ],
    'list' => [


////        'allowed_actions' => [
////            'csv-export' => true,
////        ],
//
        'actions' => [
            'set' => [
                'allowed_fields' => [
//                    'soggetti_residenti',
                ],
            ],
            //            'csv-export' => [
//                'default' => [
//                    'blacklist' => [
////                        'password'
//                    ],
//                    'whitelist' => [
//                        "codice",
//                        "nome_it",
//
//                ],
//                    'fieldsParams' => [
////                        "istituto|comunenome" => [
////                            'header' => 'Istituto - comune (nome)',
////                            'item' => 'istituto|T_COMUNE_ID',
////                        ],
//                    ],
//                    'separator' => ';',
//                    'endline' => "\n",
//                    'headers' => 'translate',
//                    'decimalFrom' => '.',
//                    'decimalTo' => false,
//                ],
//            ]
//
        ],

        'dependencies' => [
            'search' => 'search',
        ],

        'pagination' => [
            //'per_page' => 20,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            'id' => [],

            'denominazione' => [],

            'fisicagiuridica' => [],
            'codicefiscale' => [],
            'partitaiva' => [],


            'indirizzo' => [],
            'numero_civico' => [],
            'cap' => [],


            'email' => [],
            'tel' => [],

            'attivo' => [],


        ],
        'relations' => [

            'comuneresidenza' => [
                'fields' => [
                    'nome_it' => [],
                    'sigla_provincia' => [],
                ]
            ],
        ],
        'params' => [

        ],
    ],


    'edit' => [
        'actions' => [
            'autocomplete' => [
                'fields' => [
                    'comunenascita_id' => [
                        'model' => 'CupGeoComune',
                        'result_fields' => [
                            'nome_it',
                            'sigla_provincia',
                            'nazione|codice_iso_3',
                        ]
                    ],
                    'comuneresidenza_id' => [
                        'model' => 'CupGeoComune',
                        'result_fields' => [
                            'nome_it',
                            'sigla_provincia',
                            'nazione|codice_iso_3',
                        ]
                    ],
                    'rapplegale_id' => [
                        'model' => 'CupAnagAnagrafica',
                        'result_fields' => [
                            'id',
                            'cognome',
                            'nome',
                            'codice_fiscale',
                        ]
                    ]
                ],
            ],
        ],
        'fields' => [
            'id' => [],

            'fisicagiuridica' => [
                'options' => 'dboptions'
            ],

            'denominazione' => [],
            'cognome' => [],
            'nome' => [],

            'alias' => [],

            'codicefiscale' => [],
            'partitaiva' => [],

            'datanascita' => [],

            'comunenascita_id' => [
                'referred_data' => 'method:model',
            ],
            'rapplegale_id' => [
//                'referred_data' => 'method:model',
            ],

            'nazionalita_id' => [
                'options' => 'relation:nazionalita'
            ],

//PERSONA GIURIDICA
            'naturagiuridica_id' => [],

//PERSONA FISICA
            'sesso' => [
                'options' => 'dboptions'
            ],
            'professione_id' => [
                'options' => 'relation:professione'
            ],
            'stato_civile_id' => [
                'options' => 'relation:stato_civile'
            ],

            'indirizzo' => [],
            'cap' => [],
            'comuneresidenza_id' => [
                'referred_data' => 'method:model',
            ],

            'localita' => [],
            'numero_civico' => [],


            'tel' => [],
            'fax' => [],
            'email' => [],
            'pec' => [],
            'url' => [],

            'note' => [],
//ALTRE INFO UTILI A UNA CERTA APP (JSON)
            'app_info' => [],

            'organizzazione' => [
                'options' => 'boolean',
            ],

            'attivo' => [
                'options' => 'boolean',
            ],
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
