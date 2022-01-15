if (!window.Vue) {
    window.Vue = require('vue');
}

if (!window.events) {
    window.events = new Vue({name: 'events'});
}

Vue.component('appm-customizer', require('./components/Customizer').default);

//if (document.getElementById('app') && !document.getElementById('app').__vue__) {
const app = new Vue({
    el: '#appm-customzer'
});
//}

