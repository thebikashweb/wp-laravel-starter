require('./bootstrap');

import Vue from 'vue'
import Chart from "./components/Chart"

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Register the component globally


import VueApexCharts from 'vue-apexcharts'
Vue.component('apexchart', VueApexCharts)

const hub = new Vue({
	el: '#rahasto--chart-vue',
	components: {
		Chart,
        VueApexCharts,
	}
});
