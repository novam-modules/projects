
Vue.component('JobDocs', require('../../components/JobDocs.vue'));
Vue.component('JobSetup', require('../../components/JobSetup.vue'));
Vue.component('JobViewer', require('../../components/JobViewer.vue'));
Vue.component('NewJob', require('../../components/NewJob.vue'));
Vue.component('OfficeUse', require('../../components/OfficeUse.vue'));
Vue.component('TaskViewer', require('../../components/TaskViewer.vue'));
Vue.component('WorkOrder', require('../../components/WorkOrder.vue'));

const projects = new Vue({
    el: "#projects"
});
// require('datatables');

let $ = window.$ || require('jquery');
window.dt = require( 'datatables.net' )(window, $);
require( 'datatables.net-bs' )(window, $);
