(window.webpackJsonp=window.webpackJsonp||[]).push([[33],{111:function(t,e,s){"use strict";s.r(e);var a={name:"TicketListItem",props:["ticket","replyExcerptToggle"],methods:{lastReply:function(){if(!this.ticket.hasOwnProperty("last_reply"))return null;var t=this.ticket.last_reply;return 50<(t=t.replace(/(<([^>]+)>)/gi,"")).length?t.substring(0,100)+"...":t}}},i=s(131),n=Object(i.a)(a,(function(){var t=this,e=t.$createElement;return(e=t._self._c||e)("div",{staticClass:"row no-gutters overflow-hidden flex-md-row  h-md-250 position-relative w-100"},[e("div",{staticClass:"col-auto p-2"},[e("a",{attrs:{href:"#"}},[e("img",{staticClass:"bd-placeholder-img rounded rounded-circle customer-picture",attrs:{width:"50",height:"50",src:t.ticket.user.avatar}})])]),t._v(" "),e("div",{staticClass:"col d-flex flex-column position-static p-2 w-100"},[e("a",{attrs:{href:t.$myaccount_url+"tickets/"+t.ticket.id}},[e("div",{staticClass:"media-body small lh-125"},[e("span",{staticClass:"d-block text-gray-dark m-0 mb-1"},[e("a",{staticClass:"ticket-title",attrs:{href:t.$myaccount_url+"tickets/"+t.ticket.id}},[t._v(t._s(t.ticket.title))]),t._v(" "),e("span",{class:"badge badge-ticket-"+t.ticket.status},[t._v(t._s(t.$t(t.ticket.status)))]),t._v(" "),e("span",{class:"badge badge-ticket-priority-"+t.ticket.priority},[t._v(t._s(t.$t(t.ticket.priority)))]),t._v(" "),t.ticket.attachments.length?e("span",{staticClass:"badge badge-secondary"},[e("i",{staticClass:"fas fa-paperclip"})]):t._e()]),t._v(" "),t.ticket.category?e("div",[t._v("\n            "+t._s(t.$t("Category"))+" : "),e("span",{class:"badge badge-light border",style:"color: #"+t.stringToColor(t.ticket.category.name)},[t._v(t._s(t.$t(t.ticket.category.name)))])]):t._e(),t._v(" "),t.replyExcerptToggle?e("div",{staticClass:"my-2",domProps:{textContent:t._s(t.lastReply())}}):t._e(),t._v(" "),e("div",{staticClass:"font-weight-light d-flex justify-content-between"},[e("div",[t._v(t._s(t.$t("Submited by"))+" \n                "),e("a",{staticClass:"font-weight-bold",attrs:{href:"#"}},[t._v("\n                    "+t._s(t.ticket.user.name)+"\n                ")]),t._v(" "),e("span",{staticClass:"mx-1"},[t._v(".")]),t._v(" "),e("span",{staticClass:"text-muted"},[t._v("\n                "+t._s(t.$t("Assigned to"))+" \n                "),e("a",{staticClass:"font-weight-bold",attrs:{href:"#"}},[t._v("\n                    "+t._s(t.ticket.assigned_to.name)+"\n                ")])]),t._v(" "),e("span",{staticClass:"mx-1"},[t._v(".")]),t._v(" "),e("span",[t._v(" on "+t._s(t.ticket.submitted_on))]),t._v(" "),t.ticket.last_reply_on?[e("span",{staticClass:"mx-1"},[t._v(".")]),t._v(" "),e("span",[t._v(" "+t._s(t.$t("Last reply"))+" "+t._s(t.ticket.last_reply_on))])]:t._e()],2)])])])])])}),[],!1,null,null,null).exports,c=(a=s(6),s.n(a));n={data:function(){return{isLoading:!0,tickets:[],currentPage:1,metaData:{to:null,total:0},selectedStatus:"all",replyExcerptToggle:!1}},components:{ListItem:n},props:["title","category","type"],methods:{loadTickets:function(t){var e=this;this.isLoading=!0,c.a.post(this.$myaccount_url+"tickets/fetch?page="+this.currentPage).then((function(t){e.isLoading=!1,e.metaData=t.data.meta;var s=t.data.data;e.tickets=e.tickets.concat(s),t.data.meta.current_page==t.data.meta.last_page?e.currentPage=0:e.currentPage++})).catch((function(t){console.log(t)}))},loadMore:function(){this.loadTickets("open")}},mounted:function(){this.loadTickets("open")},computed:{filteredList:function(){var t=this,e=t.selectedStatus;return"all"===e?t.tickets:t.tickets.filter((function(t){return t.status===e}))}}},n=Object(i.a)(n,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"d-flex justify-content-end options mb-3"},[s("a",{staticClass:"btn btn-sm btn-primary shadow-sm float-right mx-1",attrs:{href:t.$myaccount_url+"tickets/new"}},[s("i",{staticClass:"fas fa-plus fa-sm text-white-50"}),t._v("\r\n      "+t._s(t.$t("New ticket"))+"\r\n    ")])]),t._v(" "),t.isLoading?s("pre-loader"):s("div",{staticClass:"p-0 mb-5 bg-white rounded shadow-sm tickets tickets-list"},[s("div",{staticClass:"border-bottom border-gray p-3 mb-0 ticket-section-title overflow-auto ticket-list-option"},[s("input",{staticClass:"btn btn-link p-1 text-grey",class:{active:"all"==t.selectedStatus},attrs:{type:"button",value:t.$t("All")+" ("+t.metaData.total+")"},on:{click:function(e){t.selectedStatus="all"}}}),t._v("\r\n      .\r\n      "),s("input",{staticClass:"btn btn-link p-1 text-danger",class:{active:"open"==t.selectedStatus},attrs:{type:"button",value:t.$t("Open")},on:{click:function(e){t.selectedStatus="open"}}}),t._v("\r\n      .\r\n      "),s("input",{staticClass:"btn btn-link p-1 text-secondary",class:{active:"closed"==t.selectedStatus},attrs:{type:"button",value:t.$t("Closed")},on:{click:function(e){t.selectedStatus="closed"}}}),t._v("\r\n      .\r\n      "),s("input",{staticClass:"btn btn-link p-1 text-success",class:{active:"solved"==t.selectedStatus},attrs:{type:"button",value:t.$t("resolved")},on:{click:function(e){t.selectedStatus="solved"}}}),t._v(" "),s("div",{staticClass:"float-right"},[s("button",{staticClass:"btn btn-outline-secondary btn-sm",on:{click:function(e){t.replyExcerptToggle=!1}}},[s("i",{staticClass:"fas fa-grip-lines"})]),t._v(" "),s("button",{staticClass:"btn btn-outline-secondary btn-sm",on:{click:function(e){t.replyExcerptToggle=!0}}},[s("i",{staticClass:"fas fa-align-left"})])])]),t._v(" "),0==t.filteredList.length?s("empty-state",{attrs:{text:"No tickets yet"}}):s("div",[t._l(t.filteredList,(function(e){return s("div",{key:e.id,staticClass:"media text-muted ticket ticket-item border-bottom border-gray",class:{"has-reply":e.has_reply}},[s("ListItem",{attrs:{replyExcerptToggle:t.replyExcerptToggle,ticket:e}})],1)})),t._v(" "),s("small",{staticClass:"d-block text-center p-2"},[t.currentPage?s("button",{staticClass:"btn btn-link btn-loadmore",attrs:{type:"button"},on:{click:function(e){return t.loadMore()}}},[t._v(t._s(t.$t("Load more"))+" "+t._s(t.metaData.to)+"/"+t._s(t.metaData.total))]):t._e()])],2)],1)],1)}),[],!1,null,null,null);e.default=n.exports},131:function(t,e,s){"use strict";function a(t,e,s,a,i,n,c,l){var o,r,d="function"==typeof t?t.options:t;return e&&(d.render=e,d.staticRenderFns=s,d._compiled=!0),a&&(d.functional=!0),n&&(d._scopeId="data-v-"+n),c?d._ssrRegister=o=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(c)}:i&&(o=l?function(){i.call(this,(d.functional?this.parent:this).$root.$options.shadowRoot)}:i),o&&(d.functional?(d._injectStyles=o,r=d.render,d.render=function(t,e){return o.call(e),r(t,e)}):(l=d.beforeCreate,d.beforeCreate=l?[].concat(l,o):[o])),{exports:t,options:d}}s.d(e,"a",(function(){return a}))}}]);