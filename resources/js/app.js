/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import ShowCategories from './components/ShowCategories.vue';
import Header from './components/Header.vue';
import Message from './components/Message.vue';
import Alert from './components/Alert.vue';
import Success from './components/Success.vue';
import CreateCategory from './components/Category/CreateCategory.vue';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('show-categories', ShowCategories);
Vue.component('header-user', Header);

Vue.component('message', Message);
Vue.component('alert', Alert);
Vue.component('success', Success);
Vue.component('create', CreateCategory);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() { 
        return {
            currentTab:'Create',
            tabs: ['Message','Create']
        }
    },
    computed: {
      currentTabComponent() {
        return this.currentTab.toLowerCase()
      }
    }
});
