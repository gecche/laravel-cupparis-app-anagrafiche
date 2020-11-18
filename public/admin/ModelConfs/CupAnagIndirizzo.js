var ModelCupAnagIndirizzo = {
    listEdit : {

    },
    search: {

    },
    // view : {
    //     modelName : 'cup_anag_indirizzo',
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
        modelName: 'cup_anag_indirizzo',
        fields: [
            'id',

            'tipo',

            'value',
            'label',
        ],
        actions: ['action-edit', 'action-delete', 'action-insert',
            // 'action-export-csv'
        ],
        orderFields: {
            'tipo': 'tipo',
            'label': 'label'
        }
        ,
        fieldsConfig: {

        },
        customActions: {
            // 'action-export-csv': {
            //     text: 'Csv',
            // }
        }
    },
    edit: {
        modelName: 'cup_anag_indirizzo',
        actions: ['action-save', 'action-back'],
        fields: [
            'id',
            // 'anagrafica_id',
            'tipologia_id',
            'indirizzo',
            'cap',
            'comuneresidenza_id',

            'localita',
            'numero_civico',

            'persona_contatto',
            'note',

//'comuni'
        ],
        fieldsConfig : {

            'tipologia_id': {
                type: 'w-select',
            },

        }
    }
    ,

}
