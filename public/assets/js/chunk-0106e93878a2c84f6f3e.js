(window.webpackJsonp=window.webpackJsonp||[]).push([[15],{112:function(t,e,r){"use strict";r.r(e);var n=r(135),o=r.n(n),a=r(142),i=(n=r(6),r.n(n));function s(t,e,r,n,o,a,i){try{var s=t[a](i),c=s.value}catch(t){return void r(t)}s.done?e(c):Promise.resolve(c).then(n,o)}function c(t){return function(){var e=this,r=arguments;return new Promise((function(n,o){var a=t.apply(e,r);function i(t){s(a,n,o,i,c,"next",t)}function c(t){s(a,n,o,i,c,"throw",t)}i(void 0)}))}}a={data:function(){return{isLoading:!0,isLoadingMore:!1,tickets:[],currentPage:1,metaData:{to:null,total:0},selectedStatus:"all",replyExcerptToggle:!1}},components:{ListItem:a.a},props:["title","category","type"],methods:{loadTickets:function(t){var e=this;return c(o.a.mark((function t(){return o.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,i.a.get(e.$myaccount_url+"tickets/fetch?category="+e.category+"&page="+e.currentPage).then((function(t){e.metaData=t.data.meta;var r=t.data.data;e.tickets=e.tickets.concat(r),t.data.meta.current_page==t.data.meta.last_page?e.currentPage=0:e.currentPage++})).catch((function(t){console.log(t)}));case 2:case"end":return t.stop()}}),t)})))()},loadMore:function(){var t=this;return c(o.a.mark((function e(){return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.isLoadingMore=!0,e.next=3,t.loadTickets("open");case 3:t.isLoadingMore=!1;case 4:case"end":return e.stop()}}),e)})))()}},mounted:function(){var t=this;return c(o.a.mark((function e(){return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.loadTickets("open");case 2:t.isLoading=!1;case 3:case"end":return e.stop()}}),e)})))()},computed:{filteredList:function(){var t=this.selectedStatus;return"all"===t?this.tickets:this.tickets.filter((function(e){return e.status===t}))}}},r=r(131),a=Object(r.a)(a,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[t.isLoading?r("pre-loader"):r("div",{staticClass:"p-0 mb-5 bg-white rounded shadow-sm tickets tickets-list"},[r("div",{staticClass:"border-bottom border-gray p-2 mb-0 ticket-section-title overflow-auto ticket-list-option"},[r("input",{staticClass:"btn btn-link p-1 text-grey",class:{active:"all"==t.selectedStatus},attrs:{type:"button",value:t.$t("All")+" ("+t.metaData.total+")"},on:{click:function(e){t.selectedStatus="all"}}}),t._v("\r\n      .\r\n      "),r("input",{staticClass:"btn btn-link p-1 text-danger",class:{active:"open"==t.selectedStatus},attrs:{type:"button",value:t.$t("Open")},on:{click:function(e){t.selectedStatus="open"}}}),t._v("\r\n      .\r\n      "),r("input",{staticClass:"btn btn-link p-1 text-secondary",class:{active:"closed"==t.selectedStatus},attrs:{type:"button",value:t.$t("Closed")},on:{click:function(e){t.selectedStatus="closed"}}}),t._v("\r\n      .\r\n      "),r("input",{staticClass:"btn btn-link p-1 text-success",class:{active:"solved"==t.selectedStatus},attrs:{type:"button",value:t.$t("Resolved")},on:{click:function(e){t.selectedStatus="solved"}}}),t._v(" "),r("div",{staticClass:"float-right"},[r("button",{staticClass:"btn btn-outline-secondary btn-sm",on:{click:function(e){t.replyExcerptToggle=!1}}},[r("i",{staticClass:"fas fa-grip-lines"})]),t._v(" "),r("button",{staticClass:"btn btn-outline-secondary btn-sm",on:{click:function(e){t.replyExcerptToggle=!0}}},[r("i",{staticClass:"fas fa-align-left"})])])]),t._v(" "),t.filteredList.length?r("div",[t._l(t.filteredList,(function(e){return r("div",{key:e.id,staticClass:"media text-muted ticket border-bottom border-gray"},[r("ListItem",{attrs:{replyExcerptToggle:t.replyExcerptToggle,ticket:e}})],1)})),t._v(" "),t.isLoadingMore?r("pre-loader"):t._e(),t._v(" "),t.currentPage?r("small",{staticClass:"d-block text-center p-2"},[r("button",{staticClass:"btn btn-link btn-loadmore",attrs:{type:"button"},on:{click:function(e){return t.loadMore()}}},[t._v(t._s(t.$t("Load more"))+" "+t._s(t.metaData.to)+"/"+t._s(t.metaData.total))])]):t._e()],2):r("empty-state",{attrs:{text:"No tickets yet"}})],1)],1)}),[],!1,null,null,null),e.default=a.exports},131:function(t,e,r){"use strict";function n(t,e,r,n,o,a,i,s){var c,l,u="function"==typeof t?t.options:t;return e&&(u.render=e,u.staticRenderFns=r,u._compiled=!0),n&&(u.functional=!0),a&&(u._scopeId="data-v-"+a),i?u._ssrRegister=c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(i)}:o&&(c=s?function(){o.call(this,(u.functional?this.parent:this).$root.$options.shadowRoot)}:o),c&&(u.functional?(u._injectStyles=c,l=u.render,u.render=function(t,e){return c.call(e),l(t,e)}):(s=u.beforeCreate,u.beforeCreate=s?[].concat(s,c):[c])),{exports:t,options:u}}r.d(e,"a",(function(){return n}))},135:function(t,e,r){t.exports=r(136)},136:function(t,e,r){t=function(t){"use strict";var e,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},a=o.iterator||"@@iterator",i=o.asyncIterator||"@@asyncIterator",s=o.toStringTag||"@@toStringTag";function c(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{c({},"")}catch(r){c=function(t,e,r){return t[e]=r}}function l(t,r,n,o){var a,i,s,c;r=r&&r.prototype instanceof y?r:y,r=Object.create(r.prototype),o=new L(o||[]);return r._invoke=(a=t,i=n,s=o,c=f,function(t,r){if(c===d)throw new Error("Generator is already running");if(c===h){if("throw"===t)throw r;return $()}for(s.method=t,s.arg=r;;){var n=s.delegate;if(n){var o=function t(r,n){var o;if((o=r.iterator[n.method])===e){if(n.delegate=null,"throw"===n.method){if(r.iterator.return&&(n.method="return",n.arg=e,t(r,n),"throw"===n.method))return v;n.method="throw",n.arg=new TypeError("The iterator does not provide a 'throw' method")}return v}return"throw"===(o=u(o,r.iterator,n.arg)).type?(n.method="throw",n.arg=o.arg,n.delegate=null,v):(o=o.arg)?o.done?(n[r.resultName]=o.value,n.next=r.nextLoc,"return"!==n.method&&(n.method="next",n.arg=e),n.delegate=null,v):o:(n.method="throw",n.arg=new TypeError("iterator result is not an object"),n.delegate=null,v)}(n,s);if(o){if(o===v)continue;return o}}if("next"===s.method)s.sent=s._sent=s.arg;else if("throw"===s.method){if(c===f)throw c=h,s.arg;s.dispatchException(s.arg)}else"return"===s.method&&s.abrupt("return",s.arg);if(c=d,"normal"===(o=u(a,i,s)).type){if(c=s.done?h:p,o.arg!==v)return{value:o.arg,done:s.done}}else"throw"===o.type&&(c=h,s.method="throw",s.arg=o.arg)}}),r}function u(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=l;var f="suspendedStart",p="suspendedYield",d="executing",h="completed",v={};function y(){}function g(){}function _(){}var m={};m[a]=function(){return this},(o=(o=Object.getPrototypeOf)&&o(o(E([]))))&&o!==r&&n.call(o,a)&&(m=o);var b=_.prototype=y.prototype=Object.create(m);function k(t){["next","throw","return"].forEach((function(e){c(t,e,(function(t){return this._invoke(e,t)}))}))}function w(t,e){var r;this._invoke=function(o,a){function i(){return new e((function(r,i){!function r(o,a,i,s){if("throw"!==(o=u(t[o],t,a)).type){var c=o.arg;return(a=c.value)&&"object"==typeof a&&n.call(a,"__await")?e.resolve(a.__await).then((function(t){r("next",t,i,s)}),(function(t){r("throw",t,i,s)})):e.resolve(a).then((function(t){c.value=t,i(c)}),(function(t){return r("throw",t,i,s)}))}s(o.arg)}(o,a,r,i)}))}return r=r?r.then(i,i):i()}}function x(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function C(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function L(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(x,this),this.reset(!0)}function E(t){if(t){if(r=t[a])return r.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var r,o=-1;return(r=function r(){for(;++o<t.length;)if(n.call(t,o))return r.value=t[o],r.done=!1,r;return r.value=e,r.done=!0,r}).next=r}}return{next:$}}function $(){return{value:e,done:!0}}return((g.prototype=b.constructor=_).constructor=g).displayName=c(_,s,"GeneratorFunction"),t.isGeneratorFunction=function(t){return!!(t="function"==typeof t&&t.constructor)&&(t===g||"GeneratorFunction"===(t.displayName||t.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,_):(t.__proto__=_,c(t,s,"GeneratorFunction")),t.prototype=Object.create(b),t},t.awrap=function(t){return{__await:t}},k(w.prototype),w.prototype[i]=function(){return this},t.AsyncIterator=w,t.async=function(e,r,n,o,a){void 0===a&&(a=Promise);var i=new w(l(e,r,n,o),a);return t.isGeneratorFunction(r)?i:i.next().then((function(t){return t.done?t.value:i.next()}))},k(b),c(b,s,"Generator"),b[a]=function(){return this},b.toString=function(){return"[object Generator]"},t.keys=function(t){var e,r=[];for(e in t)r.push(e);return r.reverse(),function e(){for(;r.length;){var n=r.pop();if(n in t)return e.value=n,e.done=!1,e}return e.done=!0,e}},t.values=E,L.prototype={constructor:L,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=e,this.done=!1,this.delegate=null,this.method="next",this.arg=e,this.tryEntries.forEach(C),!t)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=e)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var r=this;function o(n,o){return s.type="throw",s.arg=t,r.next=n,o&&(r.method="next",r.arg=e),!!o}for(var a=this.tryEntries.length-1;0<=a;--a){var i=this.tryEntries[a],s=i.completion;if("root"===i.tryLoc)return o("end");if(i.tryLoc<=this.prev){var c=n.call(i,"catchLoc"),l=n.call(i,"finallyLoc");if(c&&l){if(this.prev<i.catchLoc)return o(i.catchLoc,!0);if(this.prev<i.finallyLoc)return o(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return o(i.catchLoc,!0)}else{if(!l)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return o(i.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;0<=r;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var a=o;break}}var i=(a=a&&("break"===t||"continue"===t)&&a.tryLoc<=e&&e<=a.finallyLoc?null:a)?a.completion:{};return i.type=t,i.arg=e,a?(this.method="next",this.next=a.finallyLoc,v):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),v},finish:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),C(r),v}},catch:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n,o=r.completion;return"throw"===o.type&&(n=o.arg,C(r)),n}}throw new Error("illegal catch attempt")},delegateYield:function(t,r,n){return this.delegate={iterator:E(t),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=e),v}},t}(t.exports);try{regeneratorRuntime=t}catch(e){Function("r","regeneratorRuntime = r")(t)}},142:function(t,e,r){"use strict";var n={name:"TicketListItem",props:["ticket","replyExcerptToggle"],methods:{lastReply:function(){if(!this.ticket.hasOwnProperty("last_reply"))return null;var t=this.ticket.last_reply;return 50<(t=t.replace(/(<([^>]+)>)/gi,"")).length?t.substring(0,100)+"...":t}}};r=r(131),n=Object(r.a)(n,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"row no-gutters overflow-hidden flex-md-row  h-md-250 position-relative w-100",class:{hasReply:t.ticket.has_reply&&"open"==t.ticket.status}},[e("div",{staticClass:"col-auto p-2"},[e("a",{attrs:{href:"#"}},[e("img",{staticClass:"bd-placeholder-img rounded rounded-circle customer-picture",attrs:{width:"50",height:"50",src:t.ticket.user.avatar}})])]),t._v(" "),e("div",{staticClass:"col d-flex flex-column position-static p-2 w-100"},[e("a",{attrs:{href:t.$myaccount_url+"tickets/"+t.ticket.id}},[e("div",{staticClass:"media-body small lh-125"},[e("span",{staticClass:"d-block text-gray-dark m-0 mb-1"},[e("a",{staticClass:"ticket-title",attrs:{href:t.$myaccount_url+"tickets/"+t.ticket.id}},[t._v(t._s(t.ticket.title))]),t._v(" "),e("span",{class:"text-capitalize badge badge-ticket-"+t.ticket.status},[t._v(t._s(t.$t(t.ticket.status)))]),t._v(" "),e("span",{class:"text-capitalize badge badge-ticket-priority-"+t.ticket.priority},[t._v(t._s(t.$t(t.ticket.priority)))]),t._v(" "),t.ticket.attachments.length?e("span",{staticClass:"badge badge-secondary"},[e("i",{staticClass:"fas fa-paperclip"})]):t._e()]),t._v(" "),e("div",[t._v("\n                "+t._s(t.$t("Category"))+" : \n                "),t.ticket.category?e("span",[e("span",{class:"badge badge-light border",style:"color: #"+t.stringToColor(t.ticket.category.name)},[t._v("\n                    "+t._s(t.ticket.category.name)+"\n                ")])]):t._e()]),t._v(" "),t.replyExcerptToggle?e("div",{staticClass:"my-2",domProps:{textContent:t._s(t.lastReply())}}):t._e(),t._v(" "),e("div",{staticClass:"font-weight-light"},[e("div",[t._v(t._s(t.$t("Submited by"))+" \n                    "),t.ticket.user?e("a",{staticClass:"font-weight-bold",attrs:{href:"#"}},[t._v("\n                        "+t._s(t.ticket.user.name)+"\n                    ")]):t._e(),t._v(" "),e("span",{staticClass:"mx-1"},[t._v(".")]),t._v(" "),e("span",{staticClass:"text-muted"},[t._v("\n                    "+t._s(t.$t("Assigned to"))+" \n                    "),t.ticket.assigned_to?e("a",{staticClass:"font-weight-bold",attrs:{href:"#"}},[t._v("\n                        "+t._s(t.ticket.assigned_to.name)+"\n                    ")]):t._e()]),t._v(" "),e("span",{staticClass:"mx-1"},[t._v(".")]),t._v(" "),e("span",[t._v(" "+t._s(t.$t("on"))+" "+t._s(t.ticket.submitted_on))]),t._v(" "),[e("span",{staticClass:"mx-1"},[t._v(".")]),t._v(" "),e("span",[t._v(t._s(t.$t("Last reply"))+" "+t._s(t.ticket.last_reply_on))]),t._v("\n                        "+t._s(t.$t("By"))+"\n                        "),t.ticket.assigned_to?e("a",{staticClass:"font-weight-bold",attrs:{href:"#"}},[t._v("\n                             "+t._s(t.ticket.last_reply_by)+"\n                        ")]):t._e()]],2)])])])])])}),[],!1,null,null,null);e.a=n.exports}}]);