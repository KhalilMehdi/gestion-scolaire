import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import "admin-lte/plugins/jquery/jquery";

import $ from "jquery";
window.$ = window.jQuery = $;

import "admin-lte/plugins/bootstrap/js/bootstrap.bundle";

import "admin-lte/dist/js/adminlte";
