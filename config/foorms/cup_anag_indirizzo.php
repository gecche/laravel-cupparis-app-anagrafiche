<?php


return [

    'search' => [

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
//            'search' => 'search',
        ],

        'pagination' => [
            //'per_page' => 20,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            'id' => [],

            'tipologia_id' => [],
            'indirizzo' => [],
            'cap' => [],
            'comune_id' => [],

            'localita' => [],
            'numero_civico' => [],

            'persona_contatto' => [],
            'note' => [],


        ],
        'relations' => [

            'comune' => [
                'fields' => [
                    'nome_it' => [],
                    'sigla_provincia' => [],
                ]
            ],
            'tipologia' => [
                'fields' => [
                    'nome_it' => [],
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
                    'comune_id' => [
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

            'tipologia_id' => [],
            'indirizzo' => [],
            'cap' => [],
            'comune_id' => [],

            'localita' => [],
            'numero_civico' => [],

            'persona_contatto' => [],
            'note' => [],

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
