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
                    ],
                    'indirizzi|comune_id' => [
                        'model' => 'CupGeoComune',
                        'result_fields' => [
                            'nome_it',
                            'sigla_provincia',
                            'nazione|codice_iso_3',
                        ]
                    ],
                ],
            ],
        ],
        'fields' => [
            'id' => [],

            'fisicagiuridica' => [
                //'options' => 'dboptions',
                //'nulloption' => false,
            ],

            'denominazione' => [],
            'alias' => [],

            'naturagiuridica_id' => [],
            'rapplegale_id' => [
//                'referred_data' => 'method:model',
            ],

            'cognome' => [],
            'nome' => [],
            'sesso' => [
                'options' => 'dboptions'
            ],
            'professione_id' => [
                'options' => 'relation:professione'
            ],
            'stato_civile_id' => [
                'options' => 'relation:stato_civile'
            ],


            'codicefiscale' => [],
            'partitaiva' => [],

            'datanascita' => [],

            'comunenascita_id' => [
                'referred_data' => 'method:model',
            ],

            'nazionalita_id' => [
                'options' => 'relation:nazionalita'
            ],

//PERSONA GIURIDICA

//PERSONA FISICA

            'indirizzo' => [],
            'cap' => [],
            'comuneresidenza_id' => [
                'referred_data' => 'method:model',
            ],

            'localita' => [],
            'numero_civico' => [],


            'cell' => [],
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
                'nulloption' => false,
            ],
        ],
        'relations' => [
            'contatti' => [
                'fields' => [
                    'id' => [],
                    'tipo' => [
                        'options' => 'dboptions',
                    ],
                    'value' => [],
                    'label' => [],
                ]
            ],
            'indirizzi' => [
                'fields' => [
                    'id' => [],
                    'tipologia_id' => [
                        'options' => 'relation:tipologia',
                    ],
                    'indirizzo' => [],
                    'cap' => [],
                    'comune_id' => [
                        'referred_data' => 'method:model',
                    ],

                    'localita' => [],
                    'numero_civico' => [],

                    'persona_contatto' => [],
                    'note' => [],
                ]
            ]
        ],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
