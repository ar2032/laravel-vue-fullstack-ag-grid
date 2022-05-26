require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('pagination',require('laravel-vue-pagination'))
Vue.component('search-component',require('./components/SearchComponent.vue').default)
const app = new Vue({
    el: '#app',
});
