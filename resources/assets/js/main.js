Vue.use(require('vue-resource'));
Vue.use(require('vue-validator'));

Vue.http.options.root = 'http://mangatitan.com';
Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';

Vue.component('app-page',			require('./component/app-page.vue'));
Vue.component('vue-form',			require('./component/vue-form.vue'));
Vue.component('vue-grid',			require('./component/vue-grid.vue'));
Vue.component('vue-list',			require('./component/vue-list.vue'));
Vue.component('vue-table',			require('./component/vue-table.vue'));
Vue.component('vue-input',			require('./component/vue-input.vue'));
Vue.component('vue-select',			require('./component/vue-select.vue'));
Vue.component('vue-textarea',		require('./component/vue-textarea.vue'));
Vue.component('vue-checkbox',		require('./component/vue-checkbox.vue'));
Vue.component('vue-radio',			require('./component/vue-radio.vue'));
Vue.component('vue-upload',			require('./component/vue-upload.vue'));
Vue.component('vue-image',			require('./component/vue-image.vue'));
Vue.component('vue-progress',		require('./component/vue-progress.vue'));
Vue.component('vue-page',			require('./component/vue-page.vue'));