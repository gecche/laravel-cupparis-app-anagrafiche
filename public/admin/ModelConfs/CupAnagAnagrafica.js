var ModelCupAnagAnagrafica = {
    listEdit: {},
    search: {
        modelName: 'cup_anag_anagrafica',
        //langContext : 'user',
        fields: [
            'id',
            'denominazione'
        ],
    },
    // view : {
    //     modelName : 'cup_anag_anagrafica',
    //     //fields : ['name','email','password','password_confirmation','banned','mainrole','fotos','attachments'],
    //     actions : [],
    //     fieldsConfig : {
    //         mainrole : {
    //             type : 'w-belongsto',
    //             fields : ['name']
    //         }
    //     }
    // },
    list: {
        modelName: 'cup_anag_anagrafica',
        fields: [
            'id',

            'denominazione',

            'fisicagiuridica',
            'codicefiscale',
            'partitaiva',


            'indirizzo',
            'numero_civico',
            'cap',


            'email',
            'tel',

            'attivo',

            'comuneresidenza'

            // 'nome_it',
            // 'sigla_provincia',
        ],
        actions: ['action-edit', 'action-delete', 'action-insert',
            // 'action-export-csv'
        ],
        orderFields: {
            'id': 'id',
            'denominazione': 'denominazione'
        }
        ,
        fieldsConfig: {

            'comuneresidenza': {
                type: 'w-belongsto',
                labelFields: [
                    'nome_id',
                    'sigla_provincia'
                ],
            },
            'attivo': {
                type: 'w-swap-smarty',
                modelName: 'cup_anag_anagrafica'
            }
        }
        ,
        customActions: {
            // 'action-export-csv': {
            //     text: 'Csv',
            // }
        }
    },
    edit: {
        cRef: 'vEditAnag',
        modelName: 'cup_anag_anagrafica',
        actions: ['action-save', 'action-back'],
        fields: [
            'id',
            'fisicagiuridica',

            'denominazione',
            'cognome',
            'nome',

            'alias',

            'codicefiscale',
            'partitaiva',

            'datanascita',

            'comunenascita_id',

            'nazionalita_id',

//PERSONA GIURIDICA
            'naturagiuridica_id',
            'rapplegale_id',
            'id',
            'cognome',
            'nome',
            'codice_fiscale',

//PERSONA FISICA
            'sesso',
            'professione_id',
            'stato_civile_id',

            'indirizzo',
            'cap',
            'comuneresidenza_id',

            'localita',
            'numero_civico',


            'cell',
            'tel',
            'fax',
            'email',
            'pec',
            'url',

            'note',
//ALTRE INFO UTILI A UNA CERTA APP (JSON)
//             'app_info',

            // 'organizzazione',

            'attivo',
//'comuni'
            'contatti',
        ],
        fieldsConfig: {

            'fisicagiuridica': {
                type: 'w-radio',
                // template: "tpl-record2",
                domainValues: {
                    'F': "<i class='fa fa-user'></i> F",
                    'G': '<i class="fa fa-briefcase"></i> G'
                },
                methods: {
                    change: function () {
                        var that = this;
                        that.$crud.cRefs.vEditAnag.fisicaGiuridicaValue = that.getValue();
                    }
                }
                //inputType: 'date',
            },
            'nazionalita_id': {
                type: 'w-select',
                css: 'fisica',
            },
            'naturagiuridica_id': {
                type: 'w-select',
                css: 'giuridica',
            },
            'professione_id': {
                type: 'w-select',
                css: 'fisica',
            },
            'stato_civile_id': {
                type: 'w-select',
                css: 'fisica',
            },
            'sesso': {
                type: 'w-select',
                css: 'fisica',
            },
            // 'organizzazione' : {
            //     type: 'w-select',
            // },
            'attivo': {
                type: 'w-radio',
            },
            'note': {
                type: 'w-textarea',
            },
            'datanascita': {
                type: 'w-input',
                inputType : 'date',
            },

            'comunenascita_id': {
                type: "w-b2-select2",
                defaultValue: {
                    id: -1,
                    text: 'Seleziona...'
                },
                theme: 'bootstrap4',
                allowClear: true,
                foormName: 'cup_anag_anagrafica',
                viewType: 'edit',
                labelFields: [
                    'nome_it',
                    'sigla_provincia',
                    'nazione|codice_iso_3'
                ],
                //url : null,
                methods: {
                    getLabel: function (value) {
                        var that = this;
                        //console.log('getLabel value',value);
                        if (!value || Object.keys(value).length == 0) {
                            return 'Seleziona...';
                        }
                        return value['nome_it']
                            + " (" + value['sigla_provincia'] + ")"
                            + " - " + value['nazione|codice_iso_3'];
                        // codice originale
                        // var label = "";
                        // for (var i in that.fields) {
                        //     label += value[that.fields[i]] + " ";
                        // }
                        // return label;
                    },


                },
            },
            'comuneresidenza_id': {
                type: "w-b2-select2",
                defaultValue: {
                    id: -1,
                    text: 'Seleziona...'
                },
                theme: 'bootstrap4',
                allowClear: true,
                foormName: 'cup_anag_anagrafica',
                viewType: 'edit',
                labelFields: [
                    'nome_it',
                    'sigla_provincia',
                    'nazione|codice_iso_3'
                ],
                methods: {
                    getLabel: function (value) {
                        var that = this;
                        //console.log('getLabel value',value);
                        if (!value || Object.keys(value).length == 0) {
                            return 'Seleziona...';
                        }
                        return value['nome_it']
                            + " (" + value['sigla_provincia'] + ")"
                            + " - " + value['nazione|codice_iso_3'];
                    },


                },
            },
            'rapplegale_id': {
                type: "w-b2-select2",
                defaultValue: {
                    id: -1,
                    text: 'Seleziona...'
                },
                theme: 'bootstrap4',
                allowClear: true,
                foormName: 'cup_anag_anagrafica',
                viewType: 'edit',
                labelFields: [
                    'id',
                    'cognome',
                    'nome',
                    'codice_fiscale',
                ],
                // methods: {
                //     getLabel: function (value) {
                //         var that = this;
                //         //console.log('getLabel value',value);
                //         if (!value || Object.keys(value).length == 0) {
                //             return 'Seleziona...';
                //         }
                //         return value['nome_it']
                //             + " (" + value['sigla_provincia'] + ")"
                //             + " - " + value['nazione|codice_iso_3'];
                //     },
                //
                //
                // },
            },

            'contatti' : {
                type : 'w-hasmany-listed',
                hasManyListConf: {
                    hasManyName : 'contatti',
                    langContext: 'cup_anag_anagrafica.fields.contatti',
                    fields: [
                        'tipo',
                        'value',
                        'label',
                        'status'
                    ],
                    fieldsConfig: {
                        'status': 'w-hidden',

                        'value': {
                            type: 'w-input',
                            labelGroup : false,
                            template: "tpl-list"
                        },
                        'label': {
                            type: 'w-input',
                            template: "tpl-list"
                        },
                        'tipo': {
                            type: 'w-select',
                            template: "tpl-list"
                        },
                    },
                    fieldsDefaults : {
                        'status': 'new',
                        'id' : null,
                        'value': null,
                        'label': null,
                        'tipo': 'email',
                    },
                    hasFooter: false,
                    limit : 8,
                },
                template: "tpl-full-no",
            }
        }
    }
    ,

}
