require('./bootstrap');

import 'material-design-icons-iconfont';

import vuetify from './plugins/vuetify'
import router from './plugins/router';
import Http from './plugins/http';

window.Vue = require('vue');

Vue.use(Http);

Vue.component('app', require('./components/App.vue').default);
Vue.component('root-nav', require('./components/Nav.vue').default);
Vue.component('root-nav-bar', require('./components/NavBar').default);

new Vue({
    el: '#app',
    vuetify,
    router,
});

Vue.config.devtools = false;
Vue.config.productionTip = false;
