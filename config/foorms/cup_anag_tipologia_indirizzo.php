<?php


return [

    'search' => [
//        "fields" => [
//            "nome_it" => [
//                'operator' => 'like',
//            ]
//        ],

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
//                    ],
//                    'whitelist' => [
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

//        'dependencies' => [
//            'search' => 'search',
//        ],

        'pagination' => [
            //'per_page' => 20,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            "id" => [

            ],
            "nome_it" => [

            ],
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],


    'edit' => [
        'fields' => [
            'id' => [

            ],
            "nome_it" => [

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
