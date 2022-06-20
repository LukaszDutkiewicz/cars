import Vue from "vue"
import axios from "axios"
import VueAxios from "vue-axios"

require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(VueAxios, axios);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
