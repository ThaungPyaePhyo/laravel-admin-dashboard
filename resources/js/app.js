import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import toastr from 'toastr';

window.toastr = toastr;

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;


import DataTable from 'datatables.net-dt';

// import 'datatables.net-responsive-dt';
