(window.webpackJsonp=window.webpackJsonp||[]).push([[8],{110:function(t,e,n){"use strict";function o(t){return-1!==d.map((function(t){return t.toLowerCase()})).indexOf(t.toLowerCase())}function i(t){var e=Date.now();return t+"_"+Math.floor(1e9*Math.random())+ ++p+String(e)}function r(t){return void 0===t||""===t?[]:Array.isArray(t)?t:t.split(" ")}function s(){return{listeners:[],scriptId:i("tiny-script"),scriptLoaded:!1}}function a(t){return function(){var e,n=m(m({},t.$props.init),{readonly:t.$props.disabled,selector:"#"+t.elementId,plugins:(n=t.$props.init&&t.$props.init.plugins,e=t.$props.plugins,r(n).concat(r(e))),toolbar:t.$props.toolbar||t.$props.init&&t.$props.init.toolbar,inline:t.inlineEditor,setup:function(e){(t.editor=e).on("init",(function(n){return function(t,e,n){var i,r,s,a,c,l=e.$props.value||"",u=e.$props.initialValue||"";n.setContent(l||(e.initialized?e.cache:u)),e.$listeners.input&&(r=n,u=(i=e).$props.modelEvents||null,u=Array.isArray(u)?u.join(" "):u,i.$watch("value",(function(t,e){r&&"string"==typeof t&&t!==e&&t!==r.getContent({format:i.$props.outputFormat})&&r.setContent(t)})),r.on(u||"change input undo redo",(function(){i.$emit("input",r.getContent({format:i.$props.outputFormat}))}))),s=t,a=e.$listeners,c=n,Object.keys(a).filter(o).forEach((function(t){var e=a[t];"function"==typeof e&&("onInit"===t?e(s,c):c.on(t.substring(2),(function(t){return e(t,c)})))})),e.initialized=!0}(n,t,e)})),t.$props.init&&"function"==typeof t.$props.init.setup&&t.$props.init.setup(e)}});null!==(e=t.element)&&"textarea"===e.tagName.toLowerCase()&&(t.element.style.visibility=""),Object(h.a)().init(n)}}n.r(e);var c,l=n(6),u=n.n(l),d=["onActivate","onAddUndo","onBeforeAddUndo","onBeforeExecCommand","onBeforeGetContent","onBeforeRenderUI","onBeforeSetContent","onBeforePaste","onBlur","onChange","onClearUndos","onClick","onContextMenu","onCopy","onCut","onDblclick","onDeactivate","onDirty","onDrag","onDragDrop","onDragEnd","onDragGesture","onDragOver","onDrop","onExecCommand","onFocus","onFocusIn","onFocusOut","onGetContent","onHide","onInit","onKeyDown","onKeyPress","onKeyUp","onLoadContent","onMouseDown","onMouseEnter","onMouseLeave","onMouseMove","onMouseOut","onMouseOver","onMouseUp","onNodeChange","onObjectResizeStart","onObjectResized","onObjectSelected","onPaste","onPostProcess","onPostRender","onPreProcess","onProgressState","onRedo","onRemove","onReset","onSaveContent","onSelectionChange","onSetAttrib","onSetContent","onShow","onSubmit","onUndo","onVisualAid"],p=0,f=(c=s(),{load:function(t,e,n){c.scriptLoaded?n():(c.listeners.push(n),t.getElementById(c.scriptId)||function(t,e,n,o){var i=e.createElement("script");i.referrerPolicy="origin",i.type="application/javascript",i.id=t,i.src=n;var r=function(){i.removeEventListener("load",r),c.listeners.forEach((function(t){return t()})),c.scriptLoaded=!0};i.addEventListener("load",r),e.head&&e.head.appendChild(i)}(c.scriptId,t,e))},reinitialize:function(){c=s()}}),h=n(171),m=(l={apiKey:String,cloudChannel:String,id:String,init:Object,initialValue:String,inline:Boolean,modelEvents:[String,Array],plugins:[String,Array],tagName:String,toolbar:[String,Array],value:String,disabled:Boolean,tinymceScriptSrc:String,outputFormat:{type:String,validator:function(t){return"html"===t||"text"===t}}},function(){return(m=Object.assign||function(t){for(var e,n=1,o=arguments.length;n<o;n++)for(var i in e=arguments[n])Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i]);return t}).apply(this,arguments)}),v=["autolink lists link image preview anchor","searchreplace code","media table paste code","codesample"],g=["autolink lists link image anchor","searchreplace code","table paste"];l={data:function(){return{editorOptions:{height:300,menubar:!1,images_upload_handler:!1,relative_urls:!1,remove_script_host:!1,plugins:g,toolbar:"undo redo | formatselect | bold italic forecolor backcolor |            bullist numlist outdent indent removeformat image |            alignleft aligncenter alignright alignjustify"}}},components:{editor:{props:l,created:function(){this.elementId=this.$props.id||i("tiny-vue"),this.inlineEditor=this.$props.init&&this.$props.init.inline||this.$props.inline,this.initialized=!1},watch:{disabled:function(){this.editor.setMode(this.disabled?"readonly":"design")}},mounted:function(){var t,e;this.element=this.$el,null!==Object(h.a)()?a(this)():this.element&&this.element.ownerDocument&&(e=this.$props.cloudChannel||"5",t=this.$props.apiKey||"no-api-key",e=null==this.$props.tinymceScriptSrc?"https://cdn.tiny.cloud/1/"+t+"/tinymce/"+e+"/tinymce.min.js":this.$props.tinymceScriptSrc,f.load(this.element.ownerDocument,e,a(this)))},beforeDestroy:function(){null!==Object(h.a)()&&Object(h.a)().remove(this.editor)},deactivated:function(){var t;this.inlineEditor||(this.cache=this.editor.getContent(),null!==(t=Object(h.a)())&&void 0!==t&&t.remove(this.editor))},activated:function(){!this.inlineEditor&&this.initialized&&a(this)()},render:function(t){return this.inlineEditor?(e=t,n=this.elementId,e(this.$props.tagName||"div",{attrs:{id:n}})):t("textarea",{attrs:{id:this.elementId},style:{visibility:"hidden"}});var e,n}}},beforeMount:function(){this.editorHeight&&(this.editorOptions.height=this.editorHeight),this.uploadtype&&(this.editorOptions.images_upload_handler=this.handleImageAdded),"full"==this.options&&(this.editorOptions.toolbar="undo redo | formatselect | bold italic forecolor backcolor |            alignleft aligncenter alignright alignjustify |            bullist numlist outdent indent | link removeformat image media | code preview searchreplace anchor codesample",this.editorOptions.plugins=v)},props:["placeholder","editorHeight","value","options","uploadtype"],mounted:function(){},computed:{econtent:{get:function(){return this.value},set:function(t){this.$emit("input",t)}}},methods:{handleImageAdded:function(t,e,n,o){var i=new FormData;i.append("file",t.blob(),t.filename()),u()({url:this.$myaccount_url+"upload?type="+this.uploadtype,method:"POST",data:i}).then((function(t){"ok"==t.data.status?(t=t.data.data,e(t)):n("Image upload failed")})).catch((function(t){t.response.data.hasOwnProperty("message")?n(t.response.data.message):n(t)}))}}},n(172),n=n(131),l=Object(n.a)(l,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"text-editor-container"},[e("editor",{attrs:{init:t.editorOptions,placeholder:t.placeholder,"tinymce-script-src":t.$base_url+"assets/libs/tinymce/tinymce.min.js"},model:{value:t.econtent,callback:function(e){t.econtent=e},expression:"econtent"}},[t._v("loading...")])],1)}),[],!1,null,null,null);e.default=l.exports},131:function(t,e,n){"use strict";function o(t,e,n,o,i,r,s,a){var c,l,u="function"==typeof t?t.options:t;return e&&(u.render=e,u.staticRenderFns=n,u._compiled=!0),o&&(u.functional=!0),r&&(u._scopeId="data-v-"+r),s?u._ssrRegister=c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(s)}:i&&(c=a?function(){i.call(this,(u.functional?this.parent:this).$root.$options.shadowRoot)}:i),c&&(u.functional?(u._injectStyles=c,l=u.render,u.render=function(t,e){return c.call(e),l(t,e)}):(a=u.beforeCreate,u.beforeCreate=a?[].concat(a,c):[c])),{exports:t,options:u}}n.d(e,"a",(function(){return o}))},132:function(t,e){t.exports=function(t){var e=[];return e.toString=function(){return this.map((function(e){var n=function(t,e){var n=t[1]||"",o=t[3];return o?e&&"function"==typeof btoa?(t=function(t){return"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(t))))+" */"}(o),e=o.sources.map((function(t){return"/*# sourceURL="+o.sourceRoot+t+" */"})),[n].concat(e).concat([t]).join("\n")):[n].join("\n"):n}(e,t);return e[2]?"@media "+e[2]+"{"+n+"}":n})).join("")},e.i=function(t,n){"string"==typeof t&&(t=[[null,t,""]]);for(var o={},i=0;i<this.length;i++){var r=this[i][0];"number"==typeof r&&(o[r]=!0)}for(i=0;i<t.length;i++){var s=t[i];"number"==typeof s[0]&&o[s[0]]||(n&&!s[2]?s[2]=n:n&&(s[2]="("+s[2]+") and ("+n+")"),e.push(s))}},e}},133:function(t,e,n){var o,i,r,s={},a=(o=function(){return window&&document&&document.all&&!window.atob},function(){return i=void 0===i?o.apply(this,arguments):i}),c=(r={},function(t,e){if("function"==typeof t)return t();if(void 0===r[t]){if(e=function(t,e){return(e||document).querySelector(t)}.call(this,t,e),window.HTMLIFrameElement&&e instanceof window.HTMLIFrameElement)try{e=e.contentDocument.head}catch(t){e=null}r[t]=e}return r[t]}),l=null,u=0,d=[],p=n(134);function f(t,e){for(var n=0;n<t.length;n++){var o=t[n],i=s[o.id];if(i){i.refs++;for(var r=0;r<i.parts.length;r++)i.parts[r](o.parts[r]);for(;r<o.parts.length;r++)i.parts.push(b(o.parts[r],e))}else{var a=[];for(r=0;r<o.parts.length;r++)a.push(b(o.parts[r],e));s[o.id]={id:o.id,refs:1,parts:a}}}}function h(t,e){for(var n=[],o={},i=0;i<t.length;i++){var r=t[i],s=e.base?r[0]+e.base:r[0];r={css:r[1],media:r[2],sourceMap:r[3]};o[s]?o[s].parts.push(r):n.push(o[s]={id:s,parts:[r]})}return n}function m(t,e){var n=c(t.insertInto);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var o=d[d.length-1];if("top"===t.insertAt)o?o.nextSibling?n.insertBefore(e,o.nextSibling):n.appendChild(e):n.insertBefore(e,n.firstChild),d.push(e);else if("bottom"===t.insertAt)n.appendChild(e);else{if("object"!=typeof t.insertAt||!t.insertAt.before)throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");t=c(t.insertAt.before,n),n.insertBefore(e,t)}}function v(t){null!==t.parentNode&&(t.parentNode.removeChild(t),0<=(t=d.indexOf(t))&&d.splice(t,1))}function g(t){var e,o=document.createElement("style");return void 0===t.attrs.type&&(t.attrs.type="text/css"),void 0!==t.attrs.nonce||(e=n.nc)&&(t.attrs.nonce=e),y(o,t.attrs),m(t,o),o}function y(t,e){Object.keys(e).forEach((function(n){t.setAttribute(n,e[n])}))}function b(t,e){var n,o,i,r,s;if(e.transform&&t.css){if(!(r="function"==typeof e.transform?e.transform(t.css):e.transform.default(t.css)))return function(){};t.css=r}return i=e.singleton?(s=u++,n=l=l||g(e),o=S.bind(null,n,s,!1),S.bind(null,n,s,!0)):t.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(r=e,s=document.createElement("link"),void 0===r.attrs.type&&(r.attrs.type="text/css"),r.attrs.rel="stylesheet",y(s,r.attrs),m(r,s),o=function(t,e,n){var o=n.css,i=n.sourceMap;n=void 0===e.convertToAbsoluteUrls&&i;(e.convertToAbsoluteUrls||n)&&(o=p(o)),i&&(o+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(i))))+" */"),i=new Blob([o],{type:"text/css"}),o=t.href,t.href=URL.createObjectURL(i),o&&URL.revokeObjectURL(o)}.bind(null,n=s,e),function(){v(n),n.href&&URL.revokeObjectURL(n.href)}):(n=g(e),o=function(t,e){var n=e.css;if((e=e.media)&&t.setAttribute("media",e),t.styleSheet)t.styleSheet.cssText=n;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(n))}}.bind(null,n),function(){v(n)}),o(t),function(e){e?e.css===t.css&&e.media===t.media&&e.sourceMap===t.sourceMap||o(t=e):i()}}t.exports=function(t,e){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");(e=e||{}).attrs="object"==typeof e.attrs?e.attrs:{},e.singleton||"boolean"==typeof e.singleton||(e.singleton=a()),e.insertInto||(e.insertInto="head"),e.insertAt||(e.insertAt="bottom");var n=h(t,e);return f(n,e),function(t){for(var o=[],i=0;i<n.length;i++){var r=n[i];(a=s[r.id]).refs--,o.push(a)}t&&f(h(t,e),e);var a;for(i=0;i<o.length;i++)if(0===(a=o[i]).refs){for(var c=0;c<a.parts.length;c++)a.parts[c]();delete s[a.id]}}};var w,C=(w=[],function(t,e){return w[t]=e,w.filter(Boolean).join("\n")});function S(t,e,n,o){n=n?"":o.css,t.styleSheet?t.styleSheet.cssText=C(e,n):(o=document.createTextNode(n),(n=t.childNodes)[e]&&t.removeChild(n[e]),n.length?t.insertBefore(o,n[e]):t.appendChild(o))}},134:function(t,e){t.exports=function(t){var e="undefined"!=typeof window&&window.location;if(!e)throw new Error("fixUrls requires window.location");if(!t||"string"!=typeof t)return t;var n=e.protocol+"//"+e.host,o=n+e.pathname.replace(/\/[^\/]*$/,"/");return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,(function(t,e){return e=e.trim().replace(/^"(.*)"$/,(function(t,e){return e})).replace(/^'(.*)'$/,(function(t,e){return e})),/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(e)?t:(e=0===e.indexOf("//")?e:0===e.indexOf("/")?n+e:o+e.replace(/^\.\//,""),"url("+JSON.stringify(e)+")")}))}},152:function(t,e,n){var o=n(173);"string"==typeof o&&(o=[[t.i,o,""]]);n(133)(o,{hmr:!0,transform:void 0,insertInto:void 0}),o.locals&&(t.exports=o.locals)},171:function(t,e,n){"use strict";(function(t){n.d(e,"a",(function(){return o}));var o=function(){var e="undefined"!=typeof window?window:t;return e&&e.tinymce?e.tinymce:null}}).call(this,n(5))},172:function(t,e,n){"use strict";n(152)},173:function(t,e,n){(t.exports=n(132)(!1)).push([t.i,"\n.tox-statusbar__branding {\r\n  display: none;\n}\n.text-editor-container textarea {\r\n  display: none;\n}\r\n",""])}}]);