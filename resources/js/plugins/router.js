import Vue from 'vue'
import VueRouter from 'vue-router'

import NotFound from '../components/pages/NotFound';
import Projects from '../components/pages/projects/Projects';

Vue.use(VueRouter);

const routes = [
    {path: '/', redirect: '/projects'},
    {path: '/projects', name: 'projects', component: Projects},
    {path: '*', component: NotFound},
];

export default  new VueRouter({
    base: window.config.baseUrl + '/',
    mode: 'history',
    routes,
});
