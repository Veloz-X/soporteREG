(window.webpackJsonp=window.webpackJsonp||[]).push([[31],{117:function(t,e,a){"use strict";a.r(e);var s=a(6),o=a.n(s);s={data:function(){return{uploadProgress:0,uploading:!1,updating:!1,errorDetails:"",updateFailed:!1,updateCompleted:!1,successMsg:""}},methods:{upload:function(){var t=this;this.uploadProgress=0,this.uploading=!1,this.updating=!1,this.errorDetails="",this.updateFailed=!1,this.updateCompleted=!1;var e,a=document.querySelector("#updateFile");0!=a.files.length?((e=new FormData).append("file",a.files[0]),e.append("type","update"),a={headers:{"Content-Type":"multipart/form-data"},onUploadProgress:function(e){e=Math.round(100*e.loaded/e.total),t.uploadProgress=e}},this.uploading=!0,o.a.post(this.$myaccount_url+"upload",e,a).then((function(e){e?"ok"==e.data.status?(t.updating=!0,t.update(e.data.data)):(t.updateFailed=!0,"string"==typeof e.data.message?(t.errorDetails=e.data.message,t.$toasted.global.error(e.data.message)):(t.$toasted.global.error(e.data.message.join(",")),t.errorDetails=e.data.message.join(","))):t.$toasted.global.error(t.$t("An error occured please try again"))}))):this.$toasted.global.error(this.$t("Please select a .zip file"))},update:function(t){var e=this;this.updating=!0,o.a.post(this.$myaccount_url+"update",{file:t}).then((function(t){"ok"==t.data.status?(e.updateCompleted=!0,e.successMsg=t.data.message,e.$toasted.global.success(t.data.message),e.uploadProgress=0,e.uploading=!1,e.updating=!1,e.errorDetails="",e.updateFailed=!1,e.refreshApp()):(e.updateFailed=!0,"string"==typeof t.data.message?(e.errorDetails=t.data.message,e.$toasted.global.error(t.data.message)):(e.$toasted.global.error(t.data.message.join(",")),e.errorDetails=t.data.message.join(",")))}))},refreshApp:function(){var t=this;o.a.post(this.$myaccount_url+"update/refresh_app").then((function(e){"ok"==e.data.status?(t.updateCompleted=!0,t.successMsg=e.data.message,t.$toasted.global.success(e.data.message),t.uploadProgress=0,t.uploading=!1,t.updating=!1,t.errorDetails="",t.updateFailed=!1):"string"==typeof e.data.message?(t.errorDetails=e.data.message,t.$toasted.global.error(e.data.message)):(t.$toasted.global.error(e.data.message.join(",")),t.errorDetails=e.data.message.join(","))}))}}},a=a(131),s=Object(a.a)(s,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",[e("input",{staticClass:"form-control p-1",attrs:{type:"file",id:"updateFile",accept:"zip,application/zip,application/x-zip"}}),t._v(" "),e("small",{staticClass:"d-block m-2"},[t._v(t._s(t.$t("upload_update_notice")))]),t._v(" "),e("button",{staticClass:"btn btn-primary d-block mt-2",attrs:{type:"button"},on:{click:function(e){return t.upload()}}},[t._v(t._s(t.$t("Update")))]),t._v(" "),t.uploading?e("div",{staticClass:"my-3 card"},[e("div",{staticClass:"card-body"},[e("div",[100==t.uploadProgress?e("span",[e("i",{staticClass:"fas fa-check text-success"}),t._v(" "+t._s(t.$t("Uploaded")))]):e("span",[e("i",{staticClass:"fas fa-upload"}),t._v(" "+t._s(t.uploadProgress)+"%")])]),t._v(" "),t.updating?e("div",[t._v("\r\n                "+t._s(t.$t("Updating"))+"...\r\n            ")]):t._e()])]):t._e(),t._v(" "),t.updateFailed?e("div",{staticClass:"alert alert-danger my-3"},[t._v("\r\n        "+t._s(t.$t("Update failed"))+" : "+t._s(t.errorDetails)+"\r\n    ")]):t._e(),t._v(" "),t.updateCompleted?e("div",{staticClass:"alert alert-success my-3"},[t._v("\r\n        "+t._s(t.successMsg)+"\r\n    ")]):t._e()])}),[],!1,null,null,null);e.default=s.exports},131:function(t,e,a){"use strict";function s(t,e,a,s,o,r,d,i){var n,l,p="function"==typeof t?t.options:t;return e&&(p.render=e,p.staticRenderFns=a,p._compiled=!0),s&&(p.functional=!0),r&&(p._scopeId="data-v-"+r),d?p._ssrRegister=n=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(d)}:o&&(n=i?function(){o.call(this,(p.functional?this.parent:this).$root.$options.shadowRoot)}:o),n&&(p.functional?(p._injectStyles=n,l=p.render,p.render=function(t,e){return n.call(e),l(t,e)}):(i=p.beforeCreate,p.beforeCreate=i?[].concat(i,n):[n])),{exports:t,options:p}}a.d(e,"a",(function(){return s}))}}]);