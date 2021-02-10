import Vue from 'vue'
import VMask from "v-mask"

Vue.use(VMask)
Vue.config.productionTip = false
Vue.component('input-cpf', require('./components/inputCpf.vue').default);

new Vue({
    el: '#cpf',
});
