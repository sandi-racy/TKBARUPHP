const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.styles([
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/font-awesome/css/font-awesome.min.css',
        './node_modules/ionicons/dist/css/ionicons.min.css',
        './node_modules/admin-lte/dist/css/AdminLTE.min.css',
        './node_modules/admin-lte/dist/css/skins/_all-skins.min.css',
        './node_modules/icheck/skins/square/blue.css',
        './node_modules/bootstrap-daterangepicker/daterangepicker.css',
        './node_modules/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css',
        './node_modules/ui-select/dist/select.min.css',
        './node_modules/select2/dist/css/select2.min.css',
        './node_modules/bootstrap-sweetalert/dist/sweetalert.css',
        './node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        './node_modules/animate.css/animate.css',
        './resources/assets/css/adminlte.custom.css'
    ], 'public/adminlte/css/adminlte.css')
    .scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './node_modules/angular/angular.min.js',
        './node_modules/vue/dist/vue.min.js',
        './node_modules/vue-resource/dist/vue-resource.js',
        './node_modules/angular-sanitize/angular-sanitize.min.js',
        './node_modules/moment/min/moment.min.js',
        './node_modules/moment-duration-format/lib/moment-duration-format.js',
        './node_modules/icheck/icheck.min.js',
        './node_modules/bootstrap-daterangepicker/daterangepicker.js',
        './node_modules/autonumeric/autoNumeric-min.js',
        './resources/assets/js/parsley.config.js',
        './node_modules/parsleyjs/dist/parsley.min.js',
        './node_modules/parsleyjs/dist/i18n/en.js',
        './node_modules/parsleyjs/dist/i18n/id.js',
        './node_modules/parsleyjs/dist/i18n/en.extra.js',
        './node_modules/parsleyjs/dist/i18n/id.extra.js',
        './node_modules/ui-select/dist/select.min.js',
        './node_modules/select2/dist/js/select2.full.min.js',
        './node_modules/jquery-slimscroll/jquery.slimscroll.js',
        './node_modules/admin-lte/dist/js/app.min.js',
        './node_modules/bootstrap-sweetalert/dist/sweetalert.min.js',
        './node_modules/lodash/lodash.min.js',
        './node_modules/jquery-gotop/src/jquery.gotop.min.js',
        './node_modules/angular-fcsa-number/src/fcsaNumber.min.js',
        './node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        './node_modules/numeral/min/numeral.min.js',
        './node_modules/modernizr/bin/modernizr',
        './node_modules/noty/js/noty/packaged/jquery.noty.packaged.js',
        './resources/assets/js/adminlte.custom.js'
    ], 'public/adminlte/js/app.js')
        .copy('node_modules/admin-lte/dist/img/boxed-bg.jpg', 'public/adminlte/img')
        .copy('node_modules/highcharts/highcharts.js', 'public/adminlte/js')
        .copy('node_modules/fullcalendar/dist/fullcalendar.min.js', 'public/adminlte/js')
        .copy('node_modules/fullcalendar/dist/locale/id.js', 'public/adminlte/js')
        .copy('node_modules/tooltipster/dist/js/tooltipster.bundle.min.js', 'public/adminlte/js')
        .copy('node_modules/pdfobject/pdfobject.min.js', 'public/adminlte/js')
        .copy('node_modules/bootstrap/fonts', 'public/adminlte/fonts')
        .copy('node_modules/font-awesome/fonts', 'public/adminlte/fonts')
        .copy('node_modules/ionicons/dist/fonts', 'public/adminlte/fonts')
        .copy('node_modules/icheck/skins/square/blue.png', 'public/adminlte/css')
        .copy('node_modules/icheck/skins/square/blue@2x.png', 'public/adminlte/css')
        .copy('node_modules/highcharts/css/highcharts.css', 'public/adminlte/css')
        .copy('node_modules/fullcalendar/dist/fullcalendar.min.css', 'public/adminlte/css')
        .copy('node_modules/fullcalendar/dist/fullcalendar.print.min.css', 'public/adminlte/css')
        .copy('node_modules/tooltipster/dist/css/tooltipster.bundle.min.css', 'public/adminlte/css')
        .copy('node_modules/tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css', 'public/adminlte/css')
        .copy('resources/assets/css/frontweb.css', 'public/frontweb/css');
});