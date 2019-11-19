
require('./bootstrap');
require('../../node_modules/bootstrap')

// console.log('working');
window.Vue = require('vue');

// vue components 
Vue.component('vidshare', require('./components/VideoShare.vue').default);
Vue.component('generalchat', require('./components/GeneralChat.vue').default);


// new vue instance 
const app = new Vue({
    el: '#app',
});