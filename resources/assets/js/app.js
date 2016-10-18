
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vuetable from 'vuetable/src/components/Vuetable.vue';
import VuetablePagination from 'vuetable/src/components/VuetablePagination.vue';
import VuetablePaginationDropdown  from 'vuetable/src/components/VuetablePaginationDropdown.vue';
import VueSelect from 'vue-select/src/components/Select.vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
Vue.component('vuetable', Vuetable);
Vue.component('vuetable-pagination', VuetablePagination);
Vue.component('vuetable-pagination-dropdown', VuetablePaginationDropdown);
Vue.component('vue-select', VueSelect);

Vue.component('example', require('./components/Example.vue'));
Vue.component('vue-users', require('./components/UserSelect.vue'));

const loadUsers = {
    methods: {
        fetchAllUsers() {
            this.$http.get('/api/users/names').then(function(resp) {
                this.userOptions = resp.data;
            });
        },
        loadUsers(search, loading) {
            loading(true);
            this.$http.get('/api/users/names?q='+search).then(resp => {
                this.userOptions = resp.data;
                loading(false);
            })
        }
    }
    
};

const app = new Vue({
    el: 'body',

    mixins: [loadUsers],
    data() {
        return {
            userOptions:null
        };
    },
    ready() {
        if (document.getElementsByClassName('v-select').length > 0) {
            this.fetchAllUsers();
        }
    }
});
