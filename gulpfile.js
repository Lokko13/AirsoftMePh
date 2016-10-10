const elixir = require('laravel-elixir');
const bowerDir = '../../../vendor/bower_components/'
require('laravel-elixir-vue');

elixir.configsourcemaps = false;

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

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .scripts([
       		bowerDir + 'moment/min/moment.min.js',
       		bowerDir + 'fullcalendar/dist/fullcalendar.min.js',
       	])
       .styles([
       		bowerDir + 'fullcalendar/dist/fullcalendar.min.css',
       	]);
});
