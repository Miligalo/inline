import Vue from 'vue'
import ExampleComponent from "./components/ExampleComponent";
import FilterComponent from "./components/FilterComponent";
import SearchComponent from "./components/SearchComponent";

require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        ExampleComponent,
        FilterComponent,
        SearchComponent,
    }
})
