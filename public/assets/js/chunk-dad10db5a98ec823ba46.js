(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{132:function(t,e){t.exports=function(t){var e=[];return e.toString=function(){return this.map((function(e){var n=function(t,e){var n=t[1]||"",a=t[3];return a?e&&"function"==typeof btoa?(t=function(t){return"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(t))))+" */"}(a),e=a.sources.map((function(t){return"/*# sourceURL="+a.sourceRoot+t+" */"})),[n].concat(e).concat([t]).join("\n")):[n].join("\n"):n}(e,t);return e[2]?"@media "+e[2]+"{"+n+"}":n})).join("")},e.i=function(t,n){"string"==typeof t&&(t=[[null,t,""]]);for(var a={},s=0;s<this.length;s++){var i=this[s][0];"number"==typeof i&&(a[i]=!0)}for(s=0;s<t.length;s++){var r=t[s];"number"==typeof r[0]&&a[r[0]]||(n&&!r[2]?r[2]=n:n&&(r[2]="("+r[2]+") and ("+n+")"),e.push(r))}},e}},133:function(t,e,n){var a,s,i,r={},o=(a=function(){return window&&document&&document.all&&!window.atob},function(){return s=void 0===s?a.apply(this,arguments):s}),l=(i={},function(t,e){if("function"==typeof t)return t();if(void 0===i[t]){if(e=function(t,e){return(e||document).querySelector(t)}.call(this,t,e),window.HTMLIFrameElement&&e instanceof window.HTMLIFrameElement)try{e=e.contentDocument.head}catch(t){e=null}i[t]=e}return i[t]}),c=null,u=0,d=[],f=n(134);function h(t,e){for(var n=0;n<t.length;n++){var a=t[n],s=r[a.id];if(s){s.refs++;for(var i=0;i<s.parts.length;i++)s.parts[i](a.parts[i]);for(;i<a.parts.length;i++)s.parts.push(y(a.parts[i],e))}else{var o=[];for(i=0;i<a.parts.length;i++)o.push(y(a.parts[i],e));r[a.id]={id:a.id,refs:1,parts:o}}}}function p(t,e){for(var n=[],a={},s=0;s<t.length;s++){var i=t[s],r=e.base?i[0]+e.base:i[0];i={css:i[1],media:i[2],sourceMap:i[3]};a[r]?a[r].parts.push(i):n.push(a[r]={id:r,parts:[i]})}return n}function g(t,e){var n=l(t.insertInto);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var a=d[d.length-1];if("top"===t.insertAt)a?a.nextSibling?n.insertBefore(e,a.nextSibling):n.appendChild(e):n.insertBefore(e,n.firstChild),d.push(e);else if("bottom"===t.insertAt)n.appendChild(e);else{if("object"!=typeof t.insertAt||!t.insertAt.before)throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");t=l(t.insertAt.before,n),n.insertBefore(e,t)}}function m(t){null!==t.parentNode&&(t.parentNode.removeChild(t),0<=(t=d.indexOf(t))&&d.splice(t,1))}function v(t){var e,a=document.createElement("style");return void 0===t.attrs.type&&(t.attrs.type="text/css"),void 0!==t.attrs.nonce||(e=n.nc)&&(t.attrs.nonce=e),b(a,t.attrs),g(t,a),a}function b(t,e){Object.keys(e).forEach((function(n){t.setAttribute(n,e[n])}))}function y(t,e){var n,a,s,i,r;if(e.transform&&t.css){if(!(i="function"==typeof e.transform?e.transform(t.css):e.transform.default(t.css)))return function(){};t.css=i}return s=e.singleton?(r=u++,n=c=c||v(e),a=C.bind(null,n,r,!1),C.bind(null,n,r,!0)):t.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(i=e,r=document.createElement("link"),void 0===i.attrs.type&&(i.attrs.type="text/css"),i.attrs.rel="stylesheet",b(r,i.attrs),g(i,r),a=function(t,e,n){var a=n.css,s=n.sourceMap;n=void 0===e.convertToAbsoluteUrls&&s;(e.convertToAbsoluteUrls||n)&&(a=f(a)),s&&(a+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(s))))+" */"),s=new Blob([a],{type:"text/css"}),a=t.href,t.href=URL.createObjectURL(s),a&&URL.revokeObjectURL(a)}.bind(null,n=r,e),function(){m(n),n.href&&URL.revokeObjectURL(n.href)}):(n=v(e),a=function(t,e){var n=e.css;if((e=e.media)&&t.setAttribute("media",e),t.styleSheet)t.styleSheet.cssText=n;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(n))}}.bind(null,n),function(){m(n)}),a(t),function(e){e?e.css===t.css&&e.media===t.media&&e.sourceMap===t.sourceMap||a(t=e):s()}}t.exports=function(t,e){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");(e=e||{}).attrs="object"==typeof e.attrs?e.attrs:{},e.singleton||"boolean"==typeof e.singleton||(e.singleton=o()),e.insertInto||(e.insertInto="head"),e.insertAt||(e.insertAt="bottom");var n=p(t,e);return h(n,e),function(t){for(var a=[],s=0;s<n.length;s++){var i=n[s];(o=r[i.id]).refs--,a.push(o)}t&&h(p(t,e),e);var o;for(s=0;s<a.length;s++)if(0===(o=a[s]).refs){for(var l=0;l<o.parts.length;l++)o.parts[l]();delete r[o.id]}}};var _,w=(_=[],function(t,e){return _[t]=e,_.filter(Boolean).join("\n")});function C(t,e,n,a){n=n?"":a.css,t.styleSheet?t.styleSheet.cssText=w(e,n):(a=document.createTextNode(n),(n=t.childNodes)[e]&&t.removeChild(n[e]),n.length?t.insertBefore(a,n[e]):t.appendChild(a))}},134:function(t,e){t.exports=function(t){var e="undefined"!=typeof window&&window.location;if(!e)throw new Error("fixUrls requires window.location");if(!t||"string"!=typeof t)return t;var n=e.protocol+"//"+e.host,a=n+e.pathname.replace(/\/[^\/]*$/,"/");return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,(function(t,e){return e=e.trim().replace(/^"(.*)"$/,(function(t,e){return e})).replace(/^'(.*)'$/,(function(t,e){return e})),/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(e)?t:(e=0===e.indexOf("//")?e:0===e.indexOf("/")?n+e:a+e.replace(/^\.\//,""),"url("+JSON.stringify(e)+")")}))}},158:function(t,e,n){var a=n(186);"string"==typeof a&&(a=[[t.i,a,""]]);n(133)(a,{hmr:!0,transform:void 0,insertInto:void 0}),a.locals&&(t.exports=a.locals)},185:function(t,e,n){"use strict";n(158)},186:function(t,e,n){(t.exports=n(132)(!1)).push([t.i,"\n.search-result-list {\r\n  background: white;\r\n  padding: 5px;\r\n  margin-top: -3px;\r\n  border-radius: 5px;\r\n  z-index: 1;\r\n  border: 1px solid #ddd;\n}\r\n",""])},194:function(t,e,n){"use strict";n.r(e);var a=n(6),s=n.n(a);a={data:function(){return{listCategories:[],articlesList:[],columns:["title","category","Published","created at",""],checkedArticles:[],checkAllState:!1,indeterminateState:!1,isLoading:!0,nextpage:null,searchResults:{type:"article",target_url:this.$myaccount_url+"#/articles/edit/",data:[]},searchXHR:null,isSearching:!1,selectedCategory:null}},methods:{strlimit:function(t){if(t){var e=t.length;return t=t.substring(0,64),64<e&&(t+="..."),t}},loadCategories:function(){var t=this;this.isLoading=!0,s.a.get(this.$myaccount_url+"manage_categories/fetch").then((function(e){t.listCategories=e.data.data})).catch((function(e){t.$showError(e)})).finally((function(){t.isLoading=!1}))},fetchData:function(){var t=this;this.isLoading=!0,s.a.post(this.nextpage,{category:this.selectedCategory}).then((function(e){var n=e.data.data;t.articlesList=t.articlesList.concat(n),t.nextpage=e.data.links.next})).catch((function(e){t.$showError(e)})).finally((function(){t.isLoading=!1}))},deleteArticle:function(t){var e=this;this.$modal.show("dialog",{title:this.$t("Delete confirmation"),text:'<span class="text-danger font-weight-bold">'+this.$t("Are you sure you want to delete this record?")+"</span>",buttons:[{title:this.$t("Close")},{title:'<span class="text-danger font-weight">'+this.$t("Delete")+"</span>",handler:function(){var n=event.target;n.setAttribute("disabled","disabled"),e.$toasted.clear(),s.a.post(e.$myaccount_url+"manage_articles/"+t,{_method:"delete"}).then((function(a){"ok"==a.data.status&&(e.$toasted.global.success(e.$t("Article has been deleted.")),a=e.articlesList.findIndex((function(e){return e.id===t})),e.articlesList.splice(a,1)),n.removeAttribute("disabled")})).catch((function(t){e.$showError(t)})),e.$modal.hide("dialog")}}]})},togglePublish:function(t){var e=this;this.$toasted.clear(),s.a.post(this.$myaccount_url+"manage_articles/toggle_published",{article_id:t}).then((function(t){var n;t.data&&(n=t.data.data,t=e.articlesList.findIndex((function(t){return t.id===n.id})),e.articlesList.splice(t,1,n),e.$toasted.global.success(e.$t("Article has been updated.")))})).catch((function(t){e.$showError(t)}))},scroll:function(){var t=this;window.onscroll=function(){null!=t.nextpage&&window.innerHeight+window.scrollY>=document.body.offsetHeight&&t.fetchData()}},search:function(t){var e=this;""!=t?(null==this.searchXHR||this.searchXHR.cancel(),this.searchXHR=s.a.CancelToken.source(),this.isSearching=!0,s.a.post(this.$base_url+"search",{q:t,type:"articles"},{cancelToken:this.searchXHR.token}).then((function(t){e.searchResults.data=t.data.results.articles})).catch((function(t){s.a.isCancel(t)||e.$showError(t)})).finally((function(){e.isSearching=!1}))):this.searchResults=[]},reloadArticleByCategory:function(){this.articlesList=[],this.nextpage=this.$myaccount_url+"manage_articles/fetch",this.fetchData()}},created:function(){return this.nextpage=this.$myaccount_url+"manage_articles/fetch",this.fetchData()},directives:{indeterminate:function(t,e){t.indeterminate=Boolean(e.value)}},mounted:function(){this.scroll(),this.loadCategories()},watch:{selectedCategory:function(){this.reloadArticleByCategory()}}},n(185),n=n(131),a=Object(n.a)(a,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-sm-12"},[n("search-form",{attrs:{items:t.searchResults,"is-loading":t.isSearching},on:{input:function(e){return t.search(e)}}})],1),t._v(" "),n("div",{staticClass:"col-sm-6"},[n("v-select",{staticClass:"bg-white",attrs:{placeholder:t.$t("Filter by category"),label:"name",options:t.listCategories},scopedSlots:t._u([{key:"option",fn:function(e){return[e.thumbnail?n("img",{attrs:{src:e.thumbnail,width:"20",height:"20"}}):n("i",{staticClass:"far fa-folder fa-lg"}),t._v("\n          "+t._s(e.name)+"\n        ")]}}]),model:{value:t.selectedCategory,callback:function(e){t.selectedCategory=e},expression:"selectedCategory"}})],1),t._v(" "),n("div",{staticClass:"col-sm-6"},[n("div",{staticClass:"float-right"},[n("router-link",{staticClass:"btn btn-sm btn-outline-secondary mt-2",attrs:{to:{name:"articles_new"}}},[n("i",{staticClass:"fas fa-plus"}),t._v(" "+t._s(t.$t("new"))+"\n        ")])],1)])]),t._v(" "),t.isLoading&&0==t.articlesList.length?n("div",{staticClass:"card card-body my-3"},[n("pre-loader")],1):[t.articlesList.length?n("div",[n("ul",{staticClass:"list-group my-3 p-0"},t._l(t.articlesList,(function(e){return n("li",{key:e.id,staticClass:"list-group-item"},[n("h5",{staticClass:"card-title p-0 m-0 text-capitalize"},[n("router-link",{staticClass:"text-dark",attrs:{to:{name:"articles_edit",params:{article_id:e.id}}}},[t._v("\n              "+t._s(t.strlimit(e.title))+"\n            ")]),t._v(" "),n("a",{staticClass:"small mr-2 text-dark",attrs:{target:"_blank",href:e.url}},[n("i",{staticClass:"fas fa-external-link-alt"})])],1),t._v(" "),n("div",{staticClass:"card-text row m-0"},[n("div",{staticClass:"col-xs-12 col-sm-6 m-0 p-0"},[e.category?n("span",{staticClass:"text-capitalize",style:{color:"#"+t.stringToColor(e.category.name)}},[t._v(t._s(e.category.name))]):n("span",[t._v(t._s(t.$t("uncategorized")))]),t._v("\n              -\n              "),n("small",[t._v(t._s(t.$t("out_of_found_this_helpful",{helpful:e.rate_helpful,total:e.rate_total})))]),t._v("\n              -\n              "),n("small",{staticClass:"text-muted"},[t._v(t._s(e.created_at))])]),t._v(" "),n("div",{staticClass:"col-xs-12 col-sm-6 m-0 p-0"},[n("div",{staticClass:"float-right"},[e.published?t._e():n("span",{staticClass:"badge badge-warning"},[n("i",{staticClass:"far fa-eye-slash"})]),t._v(" "),n("div",{staticClass:"dropdown d-inline"},[t._m(0,!0),t._v(" "),n("div",{staticClass:"dropdown-menu dropdown-menu-right",attrs:{"aria-labelledby":"dropdownMenuButton"}},[n("button",{staticClass:"dropdown-item",attrs:{type:"button","data-html":"true","data-toggle":"tooltip",title:t.$t("Toggle publish article")},on:{click:function(n){return t.togglePublish(e.id)}}},[e.published?n("span",[n("i",{staticClass:"fas fa-fw fa-eye-slash"}),t._v("\n                        "+t._s(t.$t("Unpublish"))+"\n                      ")]):n("span",[n("i",{staticClass:"fas fa-fw fa-eye"}),t._v("\n                        "+t._s(t.$t("Publish"))+"\n                      ")])]),t._v(" "),n("router-link",{staticClass:"dropdown-item",attrs:{to:{name:"articles_edit",params:{article_id:e.id}}}},[n("span",[n("i",{staticClass:"fas fa-fw fa-pencil-alt"}),t._v("\n                        "+t._s(t.$t("Edit"))+"\n                      ")])]),t._v(" "),n("button",{staticClass:"dropdown-item text-danger",attrs:{type:"button","data-toggle":"tooltip",title:t.$t("Delete")},on:{click:function(n){return t.deleteArticle(e.id)}}},[n("span",[n("i",{staticClass:"fas fa-fw fa-trash"}),t._v("\n                        "+t._s(t.$t("Delete"))+"\n                      ")])])],1)])])])])])})),0),t._v(" "),t.isLoading?n("pre-loader"):t._e(),t._v(" "),!t.isLoading&&t.nextpage?n("div",{staticClass:"loadmore text-center"},[n("button",{staticClass:"btn btn-outline-secondary",on:{click:function(e){return t.fetchData()}}},[t._v(t._s(t.$t("load more")))])]):t._e()],1):n("empty-state",{attrs:{text:"No articles yet"}})],t._v(" "),n("v-dialog")],2)}),[function(){var t=this.$createElement;return(t=this._self._c||t)("button",{staticClass:"btn btn-light btn-sm rounded-circle",attrs:{type:"button",id:"dropdownMenuButton","data-toggle":"dropdown","aria-haspopup":"true","aria-expanded":"false"}},[t("i",{staticClass:"fas fa-ellipsis-h"})])}],!1,null,null,null);e.default=a.exports}}]);