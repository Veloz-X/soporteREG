(window.webpackJsonp=window.webpackJsonp||[]).push([[21],{159:function(t,e,a){var s=a(188);"string"==typeof s&&(s=[[t.i,s,""]]);a(133)(s,{hmr:!0,transform:void 0,insertInto:void 0}),s.locals&&(t.exports=s.locals)},187:function(t,e,a){"use strict";a(159)},188:function(t,e,a){(t.exports=a(132)(!1)).push([t.i,".categoryLable{height:32px;width:32px;text-align:center;line-height:32px;color:#fff;font-size:18px;text-transform:uppercase}",""])},190:function(t,e,a){"use strict";a.r(e);var s=a(6),i=a.n(s),r={props:["color","letter"]},o=(a(187),a(131)),n=Object(o.a)(r,(function(){var t=this,e=t.$createElement;return(t._self._c||e)("span",{staticClass:"categoryLable m-0 p-0 mr-2 rounded-circle",style:"border:1px solid #"+t.color+"; background-color: #"+t.color},[t._v("\n      "+t._s(t.letter)+"\n  ")])}),[],!1,null,null,null).exports,c=(s={props:{category:{default:{}}},components:{categoryItemLabel:n}},r=Object(o.a)(s,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"d-flex justify-content-between align-items-center w-100"},[e("div",[e("categoryItemLabel",{attrs:{letter:t.category.name.substring(0,1),color:t.stringToColor(t.category.name)}}),t._v(" "),e("strong",{staticClass:"text-gray-dark text-capitalize"},[t._v(t._s(t.category.name))]),t._v(" "),e("span",{staticClass:"text-small badge badge-light border text-capitalize"},[t._v(t._s(t.$t("Featured")))]),t._v(" "),t.category.has_ticket?e("span",{staticClass:"text-small badge badge-light border text-capitalize"},[t._v(t._s(t.$t("Has tickets")))]):t._e(),t._v(" "),t.category.active?t._e():e("span",{staticClass:"text-small badge badge-warning border text-capitalize"},[t._v(t._s(t.$t("Disabled")))]),t._v(" "),e("span",{staticClass:"text-small badge badge-light border text-capitalize"},[t._v(t._s(t.category.tickets_count)+" "+t._s(t.$t("tickets")))]),t._v(" "),e("span",{staticClass:"text-small badge badge-light border text-capitalize"},[t._v(t._s(t.category.articles_count)+" "+t._s(t.$t("articles")))])],1),t._v(" "),e("div",{staticClass:"float-right"},[e("div",{staticClass:"dropdown d-inline"},[t._m(0),t._v(" "),e("div",{staticClass:"dropdown-menu dropdown-menu-right",attrs:{"aria-labelledby":"dropdownMenuButton"}},[e("button",{staticClass:"dropdown-item",attrs:{type:"button","data-html":"true","data-toggle":"tooltip","data-placement":"top",title:t.$t("Enable / disable category")},on:{click:function(e){return t.$emit("toggle-active",t.category.id)}}},[t.category.active?e("span",[e("i",{staticClass:"fas fa-fw fa-eye-slash"}),t._v(" "+t._s(t.$t("disable")))]):e("span",[e("i",{staticClass:"fas fa-fw fa-eye"}),t._v(" "+t._s(t.$t("enable")))])]),t._v(" "),e("button",{staticClass:"dropdown-item",attrs:{type:"button","data-toggle":"tooltip","data-placement":"top",title:t.$t("Edit")},on:{click:function(e){return t.$emit("edit",t.category.id)}}},[e("span",[e("i",{staticClass:"far fa-fw fa-edit"}),t._v(" "+t._s(t.$t("Edit")))])]),t._v(" "),e("button",{staticClass:"dropdown-item text-danger",attrs:{type:"button","data-toggle":"tooltip","data-placement":"top",title:t.$t("Delete")},on:{click:function(e){return t.$emit("delete",t.category.id)}}},[e("span",[e("i",{staticClass:"far fa-fw fa-trash-alt"}),t._v(" "+t._s(t.$t("Delete")))])])])])])])}),[function(){var t=this.$createElement;return(t=this._self._c||t)("button",{staticClass:"btn btn-light btn-sm rounded-circle",attrs:{type:"button",id:"dropdownMenuButton","data-toggle":"dropdown","aria-haspopup":"true","aria-expanded":"false"}},[t("i",{staticClass:"fas fa-ellipsis-h"})])}],!1,null,null,null).exports,s=a(135),a.n(s));function l(t,e,a,s,i,r,o){try{var n=t[r](o),c=n.value}catch(t){return void a(t)}n.done?e(c):Promise.resolve(c).then(s,i)}s={data:function(){return{categoryName:null,isLoading:!0,parent:null,listCategories:[],isFeatured:1,hasTicket:1}},props:["category","handlers"],mounted:function(){var t,e=this;return t=c.a.mark((function t(){return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,i.a.post(e.$myaccount_url+"manage_categories/view",{id:e.category}).then((function(t){e.categoryName=t.data.data.name,e.parent=t.data.data.parent,e.isFeatured=t.data.data.is_featured,e.hasTicket=t.data.data.has_ticket}));case 2:return t.next=4,i.a.get(e.$myaccount_url+"manage_categories/fetch").then((function(t){e.listCategories=t.data.data}));case 4:e.isLoading=!1;case 5:case"end":return t.stop()}}),t)})),function(){var e=this,a=arguments;return new Promise((function(s,i){var r=t.apply(e,a);function o(t){l(r,s,i,o,n,"next",t)}function n(t){l(r,s,i,o,n,"throw",t)}o(void 0)}))}()},methods:{save:function(){var t=this,e={name:this.categoryName,is_featured:this.isFeatured?1:0,has_ticket:this.hasTicket?1:0,active:this.isActive?1:0,id:this.category,_method:"put"};this.parent&&(e.parent_id=this.parent.id),i.a.post(this.$myaccount_url+"manage_categories/"+this.category,e).then((function(e){"ok"==e.data.status?(t.$toasted.global.success(e.data.message),t.handlers.update(e)):(e=Object.values(e.data.messages),t.$toasted.global.error(e.join("<br />")))}))},parentCandidate:function(){return this.listCategories.filter((function(t){return null==t.parent&&t.active}))}}};var d=Object(o.a)(s,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"card"},[e("div",{staticClass:"card-header p-2"},[e("div",{staticClass:"w-100"},[t._v("\n      "+t._s(t.$t("Edit category"))+"\n      "),e("button",{staticClass:"close",attrs:{type:"button"},on:{click:function(e){return t.$emit("close")}}},[e("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])])])]),t._v(" "),t.isLoading?e("div",{staticClass:"card-body"},[e("pre-loader")],1):[e("div",{staticClass:"card-body p-2"},[e("div",{staticClass:"form-group"},[e("label",{attrs:{for:"category_name"}},[t._v(t._s(t.$t("Category name")))]),t._v(" "),e("input",{directives:[{name:"model",rawName:"v-model",value:t.categoryName,expression:"categoryName"}],staticClass:"form-control",attrs:{type:"category",id:"category_name","aria-describedby":"categoryHelp",placeholder:t.$t("Category name")},domProps:{value:t.categoryName},on:{input:function(e){e.target.composing||(t.categoryName=e.target.value)}}})]),t._v(" "),e("div",{staticClass:"form-group"},[e("v-select",{attrs:{placeholder:t.$t("Parent category"),label:"name",options:t.parentCandidate()},model:{value:t.parent,callback:function(e){t.parent=e},expression:"parent"}})],1),t._v(" "),e("div",{staticClass:"form-group"},[e("div",{staticClass:"custom-control custom-switch d-inline"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.hasTicket,expression:"hasTicket"}],staticClass:"custom-control-input",attrs:{type:"checkbox",id:"edit-has-ticket"},domProps:{checked:Array.isArray(t.hasTicket)?-1<t._i(t.hasTicket,null):t.hasTicket},on:{change:function(e){var a=t.hasTicket,s=e.target,i=!!s.checked;Array.isArray(a)?(e=t._i(a,null),s.checked?e<0&&(t.hasTicket=a.concat([null])):-1<e&&(t.hasTicket=a.slice(0,e).concat(a.slice(e+1)))):t.hasTicket=i}}}),t._v(" "),e("label",{staticClass:"custom-control-label",attrs:{for:"edit-has-ticket","data-toggle":"tooltip","data-placement":"top",title:t.$t("Use this category for tickets")}},[t._v(t._s(t.$t("Use for tickets")))])])]),t._v(" "),e("div",{staticClass:"form-group"},[e("div",{staticClass:"custom-control custom-switch d-inline"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.isFeatured,expression:"isFeatured"}],staticClass:"custom-control-input",attrs:{type:"checkbox",id:"edit-show-frontpage"},domProps:{checked:Array.isArray(t.isFeatured)?-1<t._i(t.isFeatured,null):t.isFeatured},on:{change:function(e){var a=t.isFeatured,s=e.target,i=!!s.checked;Array.isArray(a)?(e=t._i(a,null),s.checked?e<0&&(t.isFeatured=a.concat([null])):-1<e&&(t.isFeatured=a.slice(0,e).concat(a.slice(e+1)))):t.isFeatured=i}}}),t._v(" "),e("label",{staticClass:"custom-control-label",attrs:{for:"edit-show-frontpage","data-toggle":"tooltip","data-placement":"top",title:t.$t("Display this category on front page")}},[t._v(t._s(t.$t("Show on front page")))])])])]),t._v(" "),e("div",{staticClass:"card-footer"},[e("button",{staticClass:"btn btn-outline-primary btn-sm float-right",attrs:{type:"submit"},on:{click:function(e){return t.save()}}},[e("i",{staticClass:"fas fa-check"}),t._v(" "+t._s(t.$t("save"))+"\n    ")])])]],2)}),[],!1,null,null,null).exports;r={data:function(){return{listCategories:[],categoryName:null,parent:null,isFeatured:0,hasTicket:0,isActive:0,isSaving:!1,isLoading:!1}},methods:{loadCategories:function(){var t=this;this.isLoading=!0,i.a.get(this.$myaccount_url+"manage_categories/fetch").then((function(e){t.listCategories=e.data.data})).catch((function(e){t.$showError(e)})).then((function(){t.isLoading=!1}))},addCategory:function(){var t=this;this.$toasted.clear();var e={name:this.categoryName,is_featured:this.isFeatured?1:0,has_ticket:this.hasTicket?1:0,active:this.isActive?1:0};this.parent&&(e.parent_id=this.parent.id),this.isSaving=!0,i.a.post(this.$myaccount_url+"manage_categories",e).then((function(e){var a;e.data.data&&(t.$toasted.global.success(t.$t("Category has been created.")),a=e.data.data,e=t.listCategories,t.listCategories=[].concat(a,e))})).catch((function(e){t.$showError(e)})).then((function(){t.isSaving=!1}))},updateCategory:function(){},deleteRecord:function(t){var e=this;this.$modal.show("dialog",{title:this.$t("Delete confirmation"),text:'<span class="text-danger font-weight-bold">'+this.$t("Are you sure you want to delete this record?")+"</span>",buttons:[{title:'<span class="text-danger font-weight">'+this.$t("Delete")+"</span>",handler:function(){e.doDelete(t),e.$modal.hide("dialog")}},{title:this.$t("Close")}]})},doDelete:function(t){var e=this;event.target.setAttribute("disabled","disabled"),this.$toasted.clear(),i.a.post(this.$myaccount_url+"manage_categories/"+t,{_method:"delete"}).then((function(a){a.data.data&&(e.$toasted.global.success(e.$t("Category has been deleted.")),a=e.listCategories.findIndex((function(e){return e.id===t})),e.listCategories.splice(a,1))}))},toggleActive:function(t){var e=this;i.a.post(this.$myaccount_url+"manage_categories/toggle_active/"+t).then((function(t){var a;t.data.data&&(e.$toasted.global.success(e.$t("Category has been updated.")),a=res.data.data,t=e.listCategories.findIndex((function(t){return t.id===a.id})),e.listCategories.splice(t,1,a))}))},edit:function(t){var e=this;this.$modal.show(d,{category:t,handlers:{update:function(t){e.loadCategories()}}})},parentCandidate:function(){return this.listCategories.filter((function(t){return null==t.parent&&t.active}))},parentCategories:function(){return this.listCategories.filter((function(t){return null==t.parent}))},childCategories:function(t){return this.listCategories.filter((function(e){return e.parent&&e.parent.id==t}))}},mounted:function(){this.loadCategories()},components:{categoryItemLabel:n,manageCategoriesItem:r}},r=Object(o.a)(r,(function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("main",{staticClass:"container",attrs:{role:"main"}},[a("div",{staticClass:"row"},[a("div",{staticClass:"col-sm-12 col-md-3 sticky-section"},[a("div",{staticClass:"card sticky-section-item"},[a("div",{staticClass:"card-body p-3"},[a("h4",{staticClass:"mb-3 h4 header-title"},[t._v(t._s(t.$t("New")))]),t._v(" "),a("div",{staticClass:"form-group"},[a("label",{attrs:{for:"category_name"}},[t._v(t._s(t.$t("Category name")))]),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.categoryName,expression:"categoryName"}],staticClass:"form-control",attrs:{type:"category",id:"category_name","aria-describedby":"categoryHelp",placeholder:t.$t("new category")},domProps:{value:t.categoryName},on:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.addCategory()},input:function(e){e.target.composing||(t.categoryName=e.target.value)}}})]),t._v(" "),a("div",{staticClass:"form-group"},[a("v-select",{attrs:{placeholder:t.$t("Parent category"),label:"name",options:t.parentCandidate()},model:{value:t.parent,callback:function(e){t.parent=e},expression:"parent"}})],1),t._v(" "),a("div",{staticClass:"form-group"},[a("div",{staticClass:"custom-control custom-switch d-inline"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.hasTicket,expression:"hasTicket"}],staticClass:"custom-control-input",attrs:{type:"checkbox",id:"has-ticket"},domProps:{checked:Array.isArray(t.hasTicket)?-1<t._i(t.hasTicket,null):t.hasTicket},on:{change:function(e){var a=t.hasTicket,s=e.target,i=!!s.checked;Array.isArray(a)?(e=t._i(a,null),s.checked?e<0&&(t.hasTicket=a.concat([null])):-1<e&&(t.hasTicket=a.slice(0,e).concat(a.slice(e+1)))):t.hasTicket=i}}}),t._v(" "),a("label",{staticClass:"custom-control-label",attrs:{for:"has-ticket","data-toggle":"tooltip","data-placement":"top",title:t.$t("Use this category for tickets")}},[t._v(t._s(t.$t("Use for tickets")))])])]),t._v(" "),a("div",{staticClass:"form-group"},[a("div",{staticClass:"custom-control custom-switch d-inline"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.isFeatured,expression:"isFeatured"}],staticClass:"custom-control-input",attrs:{type:"checkbox",id:"show-frontpage"},domProps:{checked:Array.isArray(t.isFeatured)?-1<t._i(t.isFeatured,null):t.isFeatured},on:{change:function(e){var a=t.isFeatured,s=e.target,i=!!s.checked;Array.isArray(a)?(e=t._i(a,null),s.checked?e<0&&(t.isFeatured=a.concat([null])):-1<e&&(t.isFeatured=a.slice(0,e).concat(a.slice(e+1)))):t.isFeatured=i}}}),t._v(" "),a("label",{staticClass:"custom-control-label",attrs:{for:"show-frontpage","data-toggle":"tooltip","data-placement":"top",title:t.$t("Display this category on front page")}},[t._v(t._s(t.$t("Show on front page")))])])]),t._v(" "),a("div",{staticClass:"form-group"},[a("div",{staticClass:"custom-control custom-switch d-inline"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.isActive,expression:"isActive"}],staticClass:"custom-control-input",attrs:{type:"checkbox",id:"isEnabled"},domProps:{checked:Array.isArray(t.isActive)?-1<t._i(t.isActive,null):t.isActive},on:{change:function(e){var a=t.isActive,s=e.target,i=!!s.checked;Array.isArray(a)?(e=t._i(a,null),s.checked?e<0&&(t.isActive=a.concat([null])):-1<e&&(t.isActive=a.slice(0,e).concat(a.slice(e+1)))):t.isActive=i}}}),t._v(" "),a("label",{staticClass:"custom-control-label",attrs:{for:"isEnabled","data-toggle":"tooltip","data-placement":"top",title:t.$t("Enable this category")}},[t._v(t._s(t.$t("Enable")))])])]),t._v(" "),a("save-btn",{staticClass:"btn btn-outline-primary btn-sm float-right",attrs:{"in-action":t.isSaving},nativeOn:{click:function(e){return t.addCategory()}}})],1)])]),t._v(" "),a("div",{staticClass:"col-sm-12 col-md-9"},[t.isLoading?a("div",{staticClass:"card card-body"},[a("pre-loader")],1):a("div",{staticClass:"p-3 bg-white rounded shadow-sm"},[t.parentCategories().length?a("div",[a("h4",{staticClass:"h4 pb-2 mb-2"},[t._v(t._s(t.$t("Categories")))]),t._v(" "),a("ul",{staticClass:"list-group"},t._l(t.parentCategories(),(function(e){return a("li",{key:e.id,staticClass:"list-group-item"},[a("transition-group",{attrs:{name:"fade",mode:"out-in"}},[a("manageCategoriesItem",{key:e.id,attrs:{category:e},on:{edit:function(e){return t.edit(e)},delete:function(e){return t.deleteRecord(e)},"toggle-active":function(e){return t.toggleActive(e)}}}),t._v(" "),t.childCategories(e.id).length?a("ul",{key:"childs-"+e.id,staticClass:"mt-3 list-group"},t._l(t.childCategories(e.id),(function(e){return a("li",{key:e.id,staticClass:"list-group-item p-2"},[a("manageCategoriesItem",{attrs:{category:e},on:{edit:function(e){return t.edit(e)},delete:function(e){return t.deleteRecord(e)},"toggle-active":function(e){return t.toggleActive(e)}}})],1)})),0):t._e()],1)],1)})),0)]):a("empty-state",{attrs:{text:"No categories yet"}})],1)])]),t._v(" "),a("v-dialog")],1)}),[],!1,null,null,null);e.default=r.exports}}]);