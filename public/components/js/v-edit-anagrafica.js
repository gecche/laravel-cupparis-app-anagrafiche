crud.components.vEditAnagrafica = Vue.component('v-edit-anagrafica', {
    extends: crud.components.views.vEdit,
    template: "#v-edit-anagrafica-template",
    data: function () {
        var that = this;
        var d = {
            fisicaGiuridicaValue : 'F',
        };
        return d;
    },
    methods: {
        getFisicaGiuridicaFields: function (type) {
            var that = this;
            switch (type) {
                case 'F':
                    return [
                        'cognome',
                        'nome',
                        'sesso',
                        'professione_id',
                        'stato_civile_id',
                    ]
                case 'G':
                    return [
                        'denominazione',
                        'alias',
                        'naturagiuridica_id',
                        'rapplegale_id',
                    ];
                default :
                    return [];
            }
        },
        getFisicaGiuridicaWidgets: function (type) {
            var that = this;
            switch (type) {
                case 'F':
                case 'G':
                    var widgets = {};
                    var fields = that.getFisicaGiuridicaFields(type);
                    for (var i in that.widgets) {
                        if (fields.indexOf(i) >= 0) {
                            widgets[i] = that.widgets[i];
                        }
                    }
                    console.log('WIDGETS:::',widgets);
                    return widgets;
                default :
                    return {};
            }
        }
        // getFisicaGiuridicaValue : function () {
        //     var that = this;
        //
        //     if (!that.getWidget) {
        //         return 'F';
        //     }
        //     var widget = that.getWidget('fisicagiuridica');
        //
        //     console.log('PROVA1',that.getWidget('fisicagiuridica'));
        //     if (!widget)
        //         return 'F';
        //
        //     console.log('PROVA',widget);
        //     return widget.getValue();
        // }

    }
})

var ManageCupAnagAnagrafica = {
    modelName: 'cup_anag_anagrafica',
    editComponentName: 'v-edit-anagrafica',
}

// crud.components.cManage = Vue.component('c-manage',{
//     extends : crud.components.cComponent,
//     props : ['cModel','cInlineEdit'],
//     mounted : function() {
//         this.createList();
//         this.createSearch();
//     },
//     beforeDestroy () {
//         if (this.listComp) this.listComp.$destroy();
//         if (this.listEditComp) this.listEditComp.$destroy();
//         if (this.editComp) this.editComp.$destroy();
//         if (this.searchComp) this.searchComp.$destroy();
//         if (this.viewComp) this.viewComp.$destroy();
//         if (this.insertComp) this.insertComp.$destroy();
//     },
//
//     data : function () {
//         var thisManage = this;
//         var _conf = this._getConf() || {};
//         var modelName = thisManage.cModel?thisManage.cModel:_conf.modelName;
//         if (!modelName)
//             throw 'model Name not found!';
//         //console.log('CONF MANAGE',_conf);
//         var d = {
//             modelName   : modelName,
//             updateTitle : '',
//         };
//         d = Object.assign(d,thisManage._getListConfiguration(_conf,modelName))
//         d = Object.assign(d,thisManage._getSearchConfiguration(_conf,modelName))
//         d = Object.assign(d,thisManage._getListEditConfiguration(_conf,modelName))
//         d = Object.assign(d,thisManage._getEditConfiguration(_conf,modelName))
//         d = Object.assign(d,thisManage._getInsertConfiguration(_conf,modelName))
//         d = Object.assign(d,thisManage._getViewConfiguration(_conf,modelName))
//         //console.log('ddddd',d);
//         return d;
//     },
//
//     methods : {
//         createList : function () {
//             var that = this;
//             if (that.listComp)
//                 that.listComp.$destroy();
//             // monto la lista
//             var id= 'd' + (new Date().getTime());
//             that.jQe('[c-list-container]').html('<div id="'+id+'"></div>');
//             if (that.listConf) {
//                 // if (that.listConf.inlineTemplate) {
//                 //     var v = Vue.component(id,{
//                 //         extends : that.$options.components[that.listComponentName],
//                 //         template : jQuery(that.listConf.inlineTemplate).html()
//                 //     });
//                 //     that.listComp = new v({
//                 //         propsData: {
//                 //             cModel: that.modelName,
//                 //             cConf : that.listConf,
//                 //             cRef : 'list-view'
//                 //         }
//                 //     });
//                 // } else {
//                     that.listComp = new that.$options.components[that.listComponentName]({
//                         propsData : {
//                             cModel : that.modelName,
//                             cConf : that.listConf,
//                             cRef : 'list-view'
//                         }
//                     });
//                 //}
//             } else {
//                 that.listComp = new that.$options.components[that.listEditComponentName]({
//                     propsData : {
//                         cModel : that.modelName,
//                         cConf : that.listEditConf,
//                         cRef : 'list-view'
//                     }
//                 });
//             }
//
//             that.listComp.$mount('#'+id);
//         },
//         createSearch : function () {
//             var that = this;
//             if (that.searchConf.fields.length == 0)
//                 return ;
//             if (that.searchComp)
//                 that.searchComp.$destroy();
//             // monto la search
//             var id= 'd' + (new Date().getTime());
//             that.jQe('[c-search-container]').html('<div id="'+id+'"></div>');
//             // if (that.searchConf.inlineTemplate) {
//             //     var v = Vue.component(id,{
//             //         extends : that.$options.components[that.searchComponentName],
//             //         template : jQuery(that.searchConf.inlineTemplate).html()
//             //     });
//             //     that.searchComp = new v({
//             //         propsData: {
//             //             cModel: that.cModel,
//             //             cConf : that.searchConf,
//             //         }
//             //     });
//             // } else {
//                 that.searchComp = new that.$options.components[that.searchComponentName]({
//                     propsData : {
//                         cModel : that.cModel,
//                         cConf : that.searchConf,
//                     }
//                 });
//             //}
//             that.searchComp.$mount('#'+id);
//         },
//         _createEdit : function(action) {
//             var thisManage = this;
//             if (thisManage.editComp) {
//                 thisManage.editComp.$destroy();
//                 thisManage.editComp = null;
//             }
//
//             thisManage.updateTitle = 'Modifica ' + thisManage.modelName;
//             var id= 'd' + (new Date().getTime());
//             thisManage.jQe('[c-edit-container]').html('<div id="'+id+'"></div>');
//             console.log('c-manage edit component name',thisManage.editComponentName)
//             thisManage.editComp = new thisManage.$options.components[thisManage.editComponentName]({
//
//                 propsData : {
//                     cModel : thisManage.modelName,
//                     cPk : action.modelData[thisManage.editConf.primaryKey],
//                     cConf : thisManage.editConf
//                 }
//             });
//             thisManage.editComp.$mount('#'+id);
//
//             thisManage.jQe('[c-collapse-edit]').collapse('show');
//             thisManage.jQe('[c-collapse-list]').collapse('hide');
//         },
//         _createView : function(action) {
//             var thisManage = this;
//             //var that = this;
//             var id= 'd' + (new Date().getTime());
//             if (thisManage.viewComp) {
//                 thisManage.viewComp.$destroy();
//                 thisManage.viewComp = null;
//             }
//             var pk = action.modelData[thisManage.viewConf.primaryKey];
//             //console.log('VIEWDATA',pk);
//             //viewConf.pk = pk;
//             thisManage.jQe('[c-view-container]').html('<div id="'+id+'"></div>');
//             thisManage.viewComp  = new thisManage.$options.components[thisManage.viewComponentName]({
//                 propsData : {
//                     cModel : thisManage.modelName,
//                     cPk : pk,
//                     cConf : thisManage.viewConf
//                 }
//             });
//             thisManage.viewComp.$mount('#'+id);
//             thisManage.jQe('[c-view_dialog]').modal('show');
//         },
//         _createInsert : function(action) {
//             var thisManage = this;
//             thisManage.updateTitle = 'Inserimento ' + thisManage.modelName;
//             var id= 'd' + (new Date().getTime());
//             thisManage.jQe('[c-edit-container]').html('<div id="'+id+'"></div>');
//             if (thisManage.insertComp)
//                 thisManage.insertComp.$destroy();
//
//             thisManage.insertComp = new thisManage.$options.components[thisManage.insertComponentName]({
//                 propsData : {
//                     cModel : thisManage.modelName,
//                     cConf : thisManage.insertConf
//                 }
//             });
//
//             thisManage.insertComp.$mount('#'+id);
//             thisManage.jQe('[c-collapse-edit]').collapse('show');
//             thisManage.jQe('[c-collapse-list]').collapse('hide');
//         },
//         _actionSaveBack : function() {
//             var thisManage = this;
//             return thisManage.merge(thisManage.$crud.conf['action-save'], {
//                 text : 'Salva e Torna alla lista',
//                 afterExecute: function () {
//                     thisManage.jQe('[c-collapse-edit]').collapse('hide');
//                     thisManage.jQe('[c-collapse-list]').collapse('show');
//                     this.view.$destroy();
//                     thisManage.listComp.reload();
//                     thisManage.jQe('[c-edit-container]').html(' ');
//                 }
//             });
//         },
//         _actionBack : function() {
//             var thisManage = this;
//             return {
//                 execute : function () {
//                     thisManage.jQe('[c-collapse-edit]').collapse('hide');
//                     thisManage.jQe('[c-collapse-list]').collapse('show');
//                     this.view.$destroy();
//                     thisManage.listComp.reload();
//                     thisManage.jQe('[c-edit-container]').html(' ');
//                 }
//             }
//     },
//         _getListConfiguration : function (conf,modelName) {
//             var thisManage = this;
//             var modelConf = "Model" + thisManage.pascalCase(modelName);
//             var originalConf = window[modelConf]?window[modelConf]:{};
//             //console.log('modelName',modelName,modelConf,originalConf);
//             var listConf = null;
//
//             if (! thisManage.cInlineEdit && ! conf.inlineEdit) {
//                 listConf = conf.listConf || originalConf.list || {};
//                 listConf = thisManage.mergeConfView(thisManage.$crud.conf.list,listConf);
//                 if (listConf.actions.indexOf('action-edit') >= 0) {
//                     listConf.customActions['action-edit'] = {
//                         execute : function () {
//                             thisManage._createEdit(this);
//                         }
//                     }
//                 }
//                 if (listConf.actions.indexOf('action-view') >= 0) {
//                     listConf.customActions['action-view'] = {
//                         execute : function () {
//                             thisManage._createView(this);
//                         }
//                     }
//                 }
//
//                 if (listConf.actions.indexOf('action-insert') >= 0) {
//                     listConf.customActions['action-insert'] = {
//                         execute : function () {
//                             thisManage._createInsert(this);
//                         }
//                     }
//                 }
//             }
//
//             var d = {
//                 listComponentName :  conf.listComponentName || 'v-list',
//                 listComp : null,
//                 listConf    : listConf,
//             };
//             return d ;
//         },
//         _getListEditConfiguration : function (conf,modelName) {
//             var thisManage = this;
//             var modelConf = "Model" + thisManage.pascalCase(modelName);
//             var originalConf = window[modelConf]?window[modelConf]:{};
//             //console.log('modelName',modelName,modelConf,originalConf);
//             var listEditConf = null;
//
//             if ( thisManage.cInlineEdit || conf.inlineEdit) {
//                 listEditConf = conf.listEditConf || originalConf.listEdit || {};
//                 listEditConf = thisManage.mergeConfView(thisManage.$crud.conf.listEdit,listEditConf);
//                 if (listEditConf.actions.indexOf('action-view')) {
//                     listEditConf.customActions['action-view'] = {
//                         execute : function () {
//                             thisManage._createView(this);
//                         }
//                     }
//                 }
//
//                 if (listEditConf.actions.indexOf('action-insert')) {
//                     listEditConf.customActions['action-insert'] = {
//                         execute : function () {
//                             thisManage._createInsert(this);
//                         }
//                     }
//                 }
//             }
//
//             var d = {
//                 listEditComponentName :  conf.listEditComponentName || 'v-list-edit',
//                 listEditComp : null,
//                 listEditConf    : listEditConf,
//             };
//             return d ;
//         },
//         _getSearchConfiguration : function (conf,modelName) {
//             var thisManage = this;
//             var modelConf = "Model" + thisManage.pascalCase(modelName);
//             var originalConf = window[modelConf]?window[modelConf]:{};
//             var searchConf = conf.searchConf || originalConf.search || {};
//             searchConf = thisManage.mergeConfView(thisManage.$crud.conf.search,searchConf);
//             searchConf = thisManage.mergeConfView(searchConf,{
//                 customActions : {
//                     'action-search' : {
//                         // beforeExecute : function( callback ) {
//                         //     var act = this;
//                         //     act.confirmDialog('sei sicuro',{
//                         //         ok:function () {
//                         //             return callback();
//                         //         }
//                         //     })
//                         //
//                         //     return true;
//                         // },
//                         beforeExecute : function() {
//                             return true;
//                         },
//                         execute : function () {
//                             var that = this;
//                             var formData = that.view.getViewData();
//                             thisManage.listComp.route.setParams(formData);
//                             thisManage.listComp.reload();
//                             return ;
//                         },
//                         afterExecute: function () {
//
//                         }
//                     }
//                 }
//             });
//
//             var d = {
//                 searchComponentName :  conf.searchComponentName || 'v-search',
//                 searchComp : null,
//                 searchConf    : searchConf,
//             };
//             return d ;
//         },
//         _getEditConfiguration: function (conf,modelName) {
//             var thisManage = this;
//             var modelConf = "Model" + thisManage.pascalCase(modelName);
//             var originalConf = window[modelConf]?window[modelConf]:{};
//
//             var editConf = conf.editConf || originalConf.edit || {};
//             editConf = thisManage.mergeConfView(thisManage.$crud.conf.edit,editConf);
//
//             editConf = thisManage.mergeConfView(editConf,{
//                 customActions : {
//                     'action-save-back' : thisManage._actionSaveBack(),
//                     'action-back' : thisManage._actionBack()
//                 }
//             });
//             if (editConf.actions.indexOf('action-save-back') < 0)
//                 editConf.actions.push('action-save-back');
//             var d = {
//                 editComponentName :  conf.editComponentName || 'v-edit',
//                 editComp : null,
//                 editConf    : editConf,
//             };
//             return d;
//         },
//         _getInsertConfiguration: function (conf,modelName) {
//             var thisManage = this;
//             var modelConf = "Model" + thisManage.pascalCase(modelName);
//             var originalConf = window[modelConf]?window[modelConf]:{};
//             var editConf = thisManage.mergeConfView(thisManage.$crud.conf.edit,(originalConf.edit || {}));
//             var insertConf = conf.insertConf || originalConf.insert || editConf;
//             insertConf = thisManage.mergeConfView(thisManage.$crud.conf.insert,insertConf);
//             insertConf.routeName = 'insert';
//             insertConf = thisManage.mergeConfView(insertConf,{
//                 customActions : {
//                     'action-save-back' : thisManage._actionSaveBack(),
//                     'action-back' : thisManage._actionBack()
//                 }
//             });
//             if (insertConf.actions.indexOf('action-save-back') < 0)
//                 insertConf.actions.push('action-save-back');
//             var d = {
//                 insertComponentName :  conf.insertComponentName || 'v-insert',
//                 insertComp : null,
//                 insertConf    :  insertConf,
//             };
//             return d;
//         },
//         _getViewConfiguration: function (conf,modelName) {
//             var thisManage = this;
//             var modelConf = "Model" + thisManage.pascalCase(modelName);
//             var originalConf = window[modelConf]?window[modelConf]:{};
//             var viewConf = conf.viewConf || originalConf.view || {};
//             viewConf = thisManage.mergeConfView(thisManage.$crud.conf.view,viewConf);
//             var d = {
//                 viewComponentName :  conf.viewComponentName || 'v-view',
//                 viewComp : null,
//                 viewConf    : conf.viewConf || viewConf,
//             };
//             return d;
//         }
//     },
//     template : '#c-manage-template'
// });
