(window.webpackJsonp=window.webpackJsonp||[]).push([[29],{118:function(t,e,a){"use strict";a.r(e);var s=a(6),o=a.n(s);s={data:function(){return{uploadProgress:0,uploading:!1,errorDetails:"",successMsg:"",fileName:""}},methods:{upload:function(){var t=this;this.uploadProgress=0,this.uploading=!1,this.errorDetails="";var e,a=document.querySelector("#modulefile");0!=a.files.length?((e=new FormData).append("file",a.files[0]),e.append("type","module"),a={headers:{"Content-Type":"multipart/form-data"},onUploadProgress:function(e){e=Math.round(100*e.loaded/e.total),t.uploadProgress=e}},this.uploading=!0,o.a.post(this.$myaccount_url+"upload",e,a).then((function(e){e?"ok"==e.data.status?(t.$toasted.global.success(e.data.message),location.reload()):"string"==typeof e.data.message?(t.errorDetails=e.data.message,t.$toasted.global.error(e.data.message)):(t.$toasted.global.error(e.data.message.join(",")),t.errorDetails=e.data.message.join(",")):t.$toasted.global.error(t.$t("An error occured please try again"))})).catch((function(e){t.$showError(e)}))):this.$toasted.global.error(this.$t("Please select a .zip file"))},fileSelected:function(t){t=t.target.files[0],this.fileName=t.name}}},a=a(131),s=Object(a.a)(s,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"p-1"},[e("div",{staticClass:"input-group"},[e("div",{staticClass:"custom-file"},[e("input",{staticClass:"custom-file-input",attrs:{type:"file",id:"modulefile",accept:"zip,application/zip,application/x-zip"},on:{change:t.fileSelected}}),t._v(" "),e("label",{staticClass:"custom-file-label",attrs:{for:"modulefile"}},[t.fileName?e("span",[t._v(" "+t._s(t.fileName)+" ")]):e("span",[t._v(t._s(t.$t("Upload module zip file"))+"...")])])]),t._v(" "),e("div",{staticClass:"input-group-append"},[e("button",{staticClass:"btn btn-outline-secondary",attrs:{type:"button"},on:{click:function(e){return t.upload()}}},[t._v(t._s(t.$t("Upload")))])])]),t._v(" "),t.uploading?e("div",{staticClass:"p-2"},[100==t.uploadProgress?e("span",[e("i",{staticClass:"fas fa-check text-success"}),t._v(" "+t._s(t.$t("Uploaded")))]):e("div",[e("div",{staticClass:"progress"},[e("div",{staticClass:"progress-bar",style:"width: "+t.uploadProgress+"%",attrs:{role:"progressbar","aria-valuenow":"100","aria-valuemin":"0","aria-valuemax":"100"}},[t._v("\r\n                    "+t._s(t.uploadProgress)+"%\r\n                ")])])])]):t._e()])}),[],!1,null,null,null);e.default=s.exports},131:function(t,e,a){"use strict";function s(t,e,a,s,o,i,r,n){var l,d,c="function"==typeof t?t.options:t;return e&&(c.render=e,c.staticRenderFns=a,c._compiled=!0),s&&(c.functional=!0),i&&(c._scopeId="data-v-"+i),r?c._ssrRegister=l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(r)}:o&&(l=n?function(){o.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:o),l&&(c.functional?(c._injectStyles=l,d=c.render,c.render=function(t,e){return l.call(e),d(t,e)}):(n=c.beforeCreate,c.beforeCreate=n?[].concat(n,l):[l])),{exports:t,options:c}}a.d(e,"a",(function(){return s}))}}]);