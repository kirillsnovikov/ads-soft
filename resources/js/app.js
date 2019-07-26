window.Vue = require('vue');
window.axios = require('axios');

Vue.component('search-component', require('./components/SearchComponent.vue').default);

const app = new Vue({
    el: '#app',
});
