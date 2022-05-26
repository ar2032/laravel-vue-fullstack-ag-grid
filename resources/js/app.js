require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('pagination',require('laravel-vue-pagination'))
const app = new Vue({
    el: '#app',
});
