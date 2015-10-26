var elixir = require('laravel-elixir');

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

var resourceUrl = './resources/assets';

elixir(function(mix) {
	mix.scripts([
		'js/angular.min.js',
		'js/jquery.js',
		'js/bootstrap.min.js'
		], 'public/js/vendor.js', resourceUrl)
    mix.copy('resources/assets/js/custom.js', 'public/js/app.js')
    mix.copy('resources/assets/fonts', 'public/fonts')
    mix.styles([
    	'resources/assets/css/bootstrap.min.css',
    	'resources/assets/css/main.css'
    ], 'public/css/style.css')
});
