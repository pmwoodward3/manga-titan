Vue.use(require('vue-resource'));
Vue.use(require('vue-validator'));

Vue.http.options.root = 'http://mangatitan.com';
Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';

Vue.component('app-page',			require('./component/app-page.vue'));
Vue.component('vue-form',			require('./component/vue-form.vue'));