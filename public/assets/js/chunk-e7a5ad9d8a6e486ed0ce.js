(window.webpackJsonp=window.webpackJsonp||[]).push([[10],{116:function(t,n,e){"use strict";e.r(n);var o=e(6),r=e.n(o);o={data:function(){return{notifications:[],pageTitle:""}},mounted:function(){var t=this;this.pageTitle=document.title,this.getNotifications(),window.setInterval((function(){t.getNotifications()}),3e4)},methods:{getNotifications:function(){var t=this;r.a.post(this.$myaccount_url+"notifications/unread").then((function(n){t.notifications=n.data}))},markAsRead:function(){var t=this;this.notifications.length&&r.a.post(this.$myaccount_url+"notifications/mark_as_read").then((function(n){document.title=t.pageTitle}))}}},e(167),e=e(131),o=Object(e.a)(o,(function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("li",{staticClass:"nav-item dropdown no-arrow notificatons-dropdown"},[e("a",{staticClass:"nav-link dropdown-toggle",attrs:{href:"#",role:"button","data-toggle":"dropdown","aria-haspopup":"true","aria-expanded":"false"},on:{click:function(n){return t.markAsRead()}}},[e("i",{staticClass:"fas fa-bell fa-fw"}),t._v(" "),t.notifications.length?e("span",{staticClass:"badge badge-danger badge-counter"},[t._v(t._s(t.notifications.length))]):t._e()]),t._v(" "),e("div",{staticClass:"dropdown-list dropdown-menu shadow animated--grow-in m-0 p-0"},[e("h5",{staticClass:"p-2 dropdown-header"},[t._v(t._s(t.$t("Notifications")))]),t._v(" "),t._l(t.notifications,(function(n,o){return e("a",{key:o,staticClass:"dropdown-item d-flex border-bottom align-items-center px-3 p-2",attrs:{href:n.data.link}},[e("div",{staticClass:"mr-2"},[e("span",{staticClass:"badge m-0 badge",class:"badge-"+n.data.color},[e("i",{class:"fas fa-"+n.data.icon+" text-white"})])]),t._v(" "),e("div",[e("span",[t._v(t._s(n.data.text))]),t._v(" "),e("div",{staticClass:"small text-muted text-gray-500"},[t._v(t._s(n.date))])])])})),t._v(" "),t.notifications.length?t._e():e("div",{staticClass:"text-center small py-2 px-5"},[t._v(t._s(t.$t("No new notifications")))]),t._v(" "),e("div",{staticClass:"py-2 text-center"},[e("a",{staticClass:"text-dark small",attrs:{href:t.$myaccount_url+"notifications"}},[t._v(t._s(t.$t("See all notifications")))])])],2)])}),[],!1,null,"32dc90f2",null);n.default=o.exports},131:function(t,n,e){"use strict";function o(t,n,e,o,r,i,s,a){var c,f,l="function"==typeof t?t.options:t;return n&&(l.render=n,l.staticRenderFns=e,l._compiled=!0),o&&(l.functional=!0),i&&(l._scopeId="data-v-"+i),s?l._ssrRegister=c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),r&&r.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(s)}:r&&(c=a?function(){r.call(this,(l.functional?this.parent:this).$root.$options.shadowRoot)}:r),c&&(l.functional?(l._injectStyles=c,f=l.render,l.render=function(t,n){return c.call(n),f(t,n)}):(a=l.beforeCreate,l.beforeCreate=a?[].concat(a,c):[c])),{exports:t,options:l}}e.d(n,"a",(function(){return o}))},132:function(t,n){t.exports=function(t){var n=[];return n.toString=function(){return this.map((function(n){var e=function(t,n){var e=t[1]||"",o=t[3];return o?n&&"function"==typeof btoa?(t=function(t){return"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(t))))+" */"}(o),n=o.sources.map((function(t){return"/*# sourceURL="+o.sourceRoot+t+" */"})),[e].concat(n).concat([t]).join("\n")):[e].join("\n"):e}(n,t);return n[2]?"@media "+n[2]+"{"+e+"}":e})).join("")},n.i=function(t,e){"string"==typeof t&&(t=[[null,t,""]]);for(var o={},r=0;r<this.length;r++){var i=this[r][0];"number"==typeof i&&(o[i]=!0)}for(r=0;r<t.length;r++){var s=t[r];"number"==typeof s[0]&&o[s[0]]||(e&&!s[2]?s[2]=e:e&&(s[2]="("+s[2]+") and ("+e+")"),n.push(s))}},n}},133:function(t,n,e){var o,r,i,s={},a=(o=function(){return window&&document&&document.all&&!window.atob},function(){return r=void 0===r?o.apply(this,arguments):r}),c=(i={},function(t,n){if("function"==typeof t)return t();if(void 0===i[t]){if(n=function(t,n){return(n||document).querySelector(t)}.call(this,t,n),window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(t){n=null}i[t]=n}return i[t]}),f=null,l=0,u=[],d=e(134);function p(t,n){for(var e=0;e<t.length;e++){var o=t[e],r=s[o.id];if(r){r.refs++;for(var i=0;i<r.parts.length;i++)r.parts[i](o.parts[i]);for(;i<o.parts.length;i++)r.parts.push(g(o.parts[i],n))}else{var a=[];for(i=0;i<o.parts.length;i++)a.push(g(o.parts[i],n));s[o.id]={id:o.id,refs:1,parts:a}}}}function h(t,n){for(var e=[],o={},r=0;r<t.length;r++){var i=t[r],s=n.base?i[0]+n.base:i[0];i={css:i[1],media:i[2],sourceMap:i[3]};o[s]?o[s].parts.push(i):e.push(o[s]={id:s,parts:[i]})}return e}function v(t,n){var e=c(t.insertInto);if(!e)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var o=u[u.length-1];if("top"===t.insertAt)o?o.nextSibling?e.insertBefore(n,o.nextSibling):e.appendChild(n):e.insertBefore(n,e.firstChild),u.push(n);else if("bottom"===t.insertAt)e.appendChild(n);else{if("object"!=typeof t.insertAt||!t.insertAt.before)throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");t=c(t.insertAt.before,e),e.insertBefore(n,t)}}function m(t){null!==t.parentNode&&(t.parentNode.removeChild(t),0<=(t=u.indexOf(t))&&u.splice(t,1))}function b(t){var n,o=document.createElement("style");return void 0===t.attrs.type&&(t.attrs.type="text/css"),void 0!==t.attrs.nonce||(n=e.nc)&&(t.attrs.nonce=n),w(o,t.attrs),v(t,o),o}function w(t,n){Object.keys(n).forEach((function(e){t.setAttribute(e,n[e])}))}function g(t,n){var e,o,r,i,s;if(n.transform&&t.css){if(!(i="function"==typeof n.transform?n.transform(t.css):n.transform.default(t.css)))return function(){};t.css=i}return r=n.singleton?(s=l++,e=f=f||b(n),o=x.bind(null,e,s,!1),x.bind(null,e,s,!0)):t.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(i=n,s=document.createElement("link"),void 0===i.attrs.type&&(i.attrs.type="text/css"),i.attrs.rel="stylesheet",w(s,i.attrs),v(i,s),o=function(t,n,e){var o=e.css,r=e.sourceMap;e=void 0===n.convertToAbsoluteUrls&&r;(n.convertToAbsoluteUrls||e)&&(o=d(o)),r&&(o+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(r))))+" */"),r=new Blob([o],{type:"text/css"}),o=t.href,t.href=URL.createObjectURL(r),o&&URL.revokeObjectURL(o)}.bind(null,e=s,n),function(){m(e),e.href&&URL.revokeObjectURL(e.href)}):(e=b(n),o=function(t,n){var e=n.css;if((n=n.media)&&t.setAttribute("media",n),t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}.bind(null,e),function(){m(e)}),o(t),function(n){n?n.css===t.css&&n.media===t.media&&n.sourceMap===t.sourceMap||o(t=n):r()}}t.exports=function(t,n){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");(n=n||{}).attrs="object"==typeof n.attrs?n.attrs:{},n.singleton||"boolean"==typeof n.singleton||(n.singleton=a()),n.insertInto||(n.insertInto="head"),n.insertAt||(n.insertAt="bottom");var e=h(t,n);return p(e,n),function(t){for(var o=[],r=0;r<e.length;r++){var i=e[r];(a=s[i.id]).refs--,o.push(a)}t&&p(h(t,n),n);var a;for(r=0;r<o.length;r++)if(0===(a=o[r]).refs){for(var c=0;c<a.parts.length;c++)a.parts[c]();delete s[a.id]}}};var y,_=(y=[],function(t,n){return y[t]=n,y.filter(Boolean).join("\n")});function x(t,n,e,o){e=e?"":o.css,t.styleSheet?t.styleSheet.cssText=_(n,e):(o=document.createTextNode(e),(e=t.childNodes)[n]&&t.removeChild(e[n]),e.length?t.insertBefore(o,e[n]):t.appendChild(o))}},134:function(t,n){t.exports=function(t){var n="undefined"!=typeof window&&window.location;if(!n)throw new Error("fixUrls requires window.location");if(!t||"string"!=typeof t)return t;var e=n.protocol+"//"+n.host,o=e+n.pathname.replace(/\/[^\/]*$/,"/");return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,(function(t,n){return n=n.trim().replace(/^"(.*)"$/,(function(t,n){return n})).replace(/^'(.*)'$/,(function(t,n){return n})),/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(n)?t:(n=0===n.indexOf("//")?n:0===n.indexOf("/")?e+n:o+n.replace(/^\.\//,""),"url("+JSON.stringify(n)+")")}))}},150:function(t,n,e){var o=e(168);"string"==typeof o&&(o=[[t.i,o,""]]);e(133)(o,{hmr:!0,transform:void 0,insertInto:void 0}),o.locals&&(t.exports=o.locals)},167:function(t,n,e){"use strict";e(150)},168:function(t,n,e){(t.exports=e(132)(!1)).push([t.i,"\n.notificatons-dropdown .dropdown-list[data-v-32dc90f2] {\r\n    max-height: 90vh;\r\n    overflow: auto;\r\n    font: status-bar;\r\n    white-space: pre-line;\r\n    word-break: break-word;\n}\n.notificatons-dropdown .dropdown-item[data-v-32dc90f2] {\r\n    font: status-bar;\r\n    white-space: pre-line;\r\n    word-break: break-word;\n}\r\n\r\n",""])}}]);