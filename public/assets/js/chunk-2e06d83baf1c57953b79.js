(window.webpackJsonp=window.webpackJsonp||[]).push([[16],{137:function(t,e,n){var i=n(140);"string"==typeof i&&(i=[[t.i,i,""]]);n(133)(i,{hmr:!0,transform:void 0,insertInto:void 0}),i.locals&&(t.exports=i.locals)},138:function(t,e,n){"use strict";var i={data:function(){return{disabled:!0,countDown:0}},props:{handlers:null,wait:{type:Number,default:0},record_name:{type:String,default:"record"},details:{type:String,default:""}},mounted:function(){this.countDown=this.wait,this.countDownTimer()},methods:{confirm:function(){this.handlers.confirm(),this.$emit("close")},countDownTimer:function(){var t=this;0<this.countDown?setTimeout((function(){--t.countDown,t.countDownTimer()}),1e3):this.disabled=!1}}};n(139),n=n(131),i=Object(n.a)(i,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"card delete-confirmation-modal"},[e("div",{staticClass:"card-body"},[e("span",{staticClass:"text-danger font-weight-bold"},[t._v("\n            "+t._s(t.$t("delete_record_confirmation",{record:t.record_name}))+"\n        ")]),t._v(" "),t.details?e("div",{staticClass:"my-1"},[t._v(t._s(t.$t(t.details)))]):t._e()]),t._v(" "),e("div",{staticClass:"row border-top p-0 m-0"},[e("div",{staticClass:"col modal-button p-0 m-0 border-right"},[e("button",{staticClass:"btn b-block w-100",on:{click:function(e){return t.$emit("close")}}},[t._v(t._s(t.$t("cancel")))])]),t._v(" "),e("div",{staticClass:"col modal-button m-0 p-0"},[e("button",{staticClass:"btn b-block w-100 text-danger",attrs:{disabled:t.disabled},on:{click:function(e){return t.confirm()}}},[t.countDown?e("span",[t._v("("+t._s(t.countDown)+")")]):t._e(),t._v("  "+t._s(t.$t("confirm"))+"\n            ")])])])])}),[],!1,null,null,null);e.a=i.exports},139:function(t,e,n){"use strict";n(137)},140:function(t,e,n){(t.exports=n(132)(!1)).push([t.i,"\n.delete-confirmation-modal .modal-button {\n    text-align: center;\n}\n",""])},192:function(t,e,n){"use strict";n.r(e);var i=n(189),s={components:{vueCustomScrollbar:n.n(i).a},data:function(){return{settings:{maxScrollbarLength:60},search:""}},props:["savedRepliesList"],methods:{scrollHanle:function(t){console.log(t)},deleteReply:function(t){this.$emit("deleteReply",t)},loadReply:function(t){this.$emit("loadReply",t)}},computed:{filteredList:function(){var t=this;return this.savedRepliesList.filter((function(e){return e.title.toLowerCase().includes(t.search.toLowerCase())}))}},mounted:function(){}},l=n(131),a=(i=Object(l.a)(s,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"card-body p-0"},[n("div",{staticClass:"m-2"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.search,expression:"search"}],staticClass:"form-control searchField",attrs:{type:"text",placeholder:t.$t("Search saved replies")},domProps:{value:t.search},on:{input:function(e){e.target.composing||(t.search=e.target.value)}}}),t._v(" "),t.search?n("button",{staticClass:"close",attrs:{type:"button","aria-label":"Close"},on:{click:function(e){t.search=""}}},[n("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])]):t._e()]),t._v(" "),t.savedRepliesList.length?n("vue-custom-scrollbar",{staticClass:"scroll-area",attrs:{settings:t.settings},on:{"ps-scroll-y":t.scrollHanle}},[n("ul",{staticClass:"list-group list-group-flush p-2 savedRepliesList"},t._l(t.filteredList,(function(e){return n("li",{key:e.id,staticClass:"list-group-item p-2",attrs:{id:"sreply-"+e.id}},[n("div",{on:{click:function(n){return t.loadReply(e.id)}}},[t._v(t._s(e.title))]),n("span",{staticClass:"float-right deleteReplyButton",on:{click:function(n){return t.deleteReply(e.id)}}},[n("i",{staticClass:"far fa-trash-alt"})])])})),0)]):n("empty-state",{attrs:{text:"No saved replies"}})],1)}),[],!1,null,null,null).exports,s=n(6),n.n(s)),o=(s={data:function(){return{}},props:["title","value","currentReply"],methods:{save:function(t){var e=this;this.$toasted.clear(),this.title?this.editorContent?a.a.post(this.$myaccount_url+"saved_replies",{title:this.title,content:this.editorContent,_method:null==this.currentReply?"post":"put",SavedReply_id:this.currentReply}).then((function(t){e.$toasted.global.success("Saved"),e.$emit("replyChanged",t.data.data)})):this.$toasted.global.error(this.$t("reply content can not be empty")):this.$toasted.global.error(this.$t("title can not be empty"))},newReply:function(){this.$emit("newReply")}},computed:{editorContent:{get:function(){return this.value},set:function(t){this.$emit("input",t)}},replyTitle:{get:function(){return this.title},set:function(t){this.$emit("updateTitle",t)}}}},s=Object(l.a)(s,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"card"},[e("div",{staticClass:"card-body"},[t.currentReply?e("button",{staticClass:"btn btn-outline-primary float-right mb-1",attrs:{type:"button"},on:{click:function(e){return t.newReply()}}},[t._v(t._s(t.$t("New reply")))]):t._e(),t._v(" "),e("div",{staticClass:"form-group"},[e("label",{attrs:{for:"reply-title"}},[t._v(t._s(t.$t("Reply title")))]),t._v(" "),e("input",{directives:[{name:"model",rawName:"v-model",value:t.replyTitle,expression:"replyTitle"}],staticClass:"form-control",attrs:{type:"reply-title",id:"reply-title","aria-describedby":"reply-titleHelp",placeholder:t.$t("Enter reply title")},domProps:{value:t.replyTitle},on:{input:function(e){e.target.composing||(t.replyTitle=e.target.value)}}}),t._v(" "),e("small",{staticClass:"form-text text-muted",attrs:{id:"reply-titleHelp"}})]),t._v(" "),e("text-editor",{attrs:{placeholder:t.$t("Type a reply")+"...",uploadtype:"ticket"},model:{value:t.editorContent,callback:function(e){t.editorContent=e},expression:"editorContent"}}),t._v(" "),e("button",{staticClass:"btn btn-outline-primary float-right mt-3",attrs:{type:"button"},on:{click:function(e){return t.save()}}},[t._v(t._s(t.$t("Save reply")))])],1)])}),[],!1,null,null,null).exports,n(138)),r=(s={components:{SavedRepliesList:i,SavedRepliesForm:s,deleteConfirmation:o.a},data:function(){return{savedRepliesList:[],currentReply:null,title:null,content:null}},methods:{updateList:function(t){var e=this.savedRepliesList.findIndex((function(e){return e.id===t.id}));-1===e?this.savedRepliesList.push(new r(t.id,t.title)):this.savedRepliesList.splice(e,1,new r(t.id,t.title)),this.currentReply=t.id,this.title=t.title,this.content=t.content},loadReply:function(t){var e=this;a.a.get(this.$myaccount_url+"saved_replies/"+t).then((function(t){e.currentReply=t.data.data.id,e.title=t.data.data.title,e.content=t.data.data.content}))},newReply:function(){this.title="",this.content="",this.currentReply=null},deleteReply:function(t){var e=this;this.$modal.show(o.a,{record_name:this.$t("ticket"),handlers:{confirm:function(){a.a.post(e.$myaccount_url+"saved_replies/"+ticketId,{_method:"delete",SavedReply_id:t}).then((function(n){var i=e.savedRepliesList.findIndex((function(e){return e.id===t}));e.savedRepliesList.splice(i,1),t==e.currentReply&&(e.currentReply=null,e.newReply())}))}}})}},mounted:function(){var t=this;a.a.get(this.$myaccount_url+"saved_replies/fetch").then((function(e){e=e.data.data;var n=t.savedRepliesList;e.forEach((function(t){n.push(new r(t.id,t.title))}))}))}},function t(e,n){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.id=e,this.title=n});s=s,s=Object(l.a)(s,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"container page-saved-replies"},[e("div",{staticClass:"row"},[e("div",{staticClass:"col-xs-12 col-sm-3 sticky-section"},[e("div",{staticClass:"nav card sticky-section-item flex-column"},[e("SavedRepliesList",{attrs:{savedRepliesList:t.savedRepliesList},on:{deleteReply:function(e){return t.deleteReply(e)},loadReply:function(e){return t.loadReply(e)}}},[e("div",{staticClass:"spinner-border mt-5 mb-5"})])],1)]),t._v(" "),e("div",{staticClass:"col-xs-12 col-sm-9"},[e("SavedRepliesForm",{attrs:{currentReply:t.currentReply,title:t.title},on:{updateTitle:function(e){t.title=e},newReply:function(e){return t.newReply()},replyChanged:function(e){return t.updateList(e)}},model:{value:t.content,callback:function(e){t.content=e},expression:"content"}})],1)]),t._v(" "),e("v-dialog")],1)}),[],!1,null,null,null);e.default=s.exports}}]);