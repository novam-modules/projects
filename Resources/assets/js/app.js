// require('datatables');

let $ = window.$ || require('jquery');
window.dt = require( 'datatables.net' )(window, $);

$('.datatable').dataTable();
