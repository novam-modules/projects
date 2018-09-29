Vue.component('JobViewer', require('../../components/JobViewer.vue'));
Vue.component('TaskViewer', require('../../components/TaskViewer.vue'));
Vue.component('WorkOrder', require('../../components/WorkOrder.vue'));

const projects = new Vue({
    el: "#projects"
});
// require('datatables');

let $ = window.$ || require('jquery');
window.dt = require( 'datatables.net' )(window, $);

$('.datatable').dataTable();
