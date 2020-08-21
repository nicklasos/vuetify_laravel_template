import Vue from 'vue';

const Http = {
  install() {
    Vue.prototype.$http = window.axios;
  },
};

export default Http;
