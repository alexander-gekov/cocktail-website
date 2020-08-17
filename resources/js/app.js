require('./bootstrap');

import Vue from 'vue';

Vue.component('card-modal', require('./components/CardModal.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        exampleModalShowing: false,
    },
});
