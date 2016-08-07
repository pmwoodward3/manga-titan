var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');
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

elixir(function(mix) {
	// mix.browserify(['main.js','./modules/Manga/Assets/main.js'], "public/modules/manga/js/main.js");
	// mix.browserify(['main.js','./modules/Admin/Assets/main.js'], "public/modules/admin/js/main.js");
	// mix.browserify(['main.js','./modules/Users/Assets/main.js'], "public/modules/users/js/main.js");
	mix.less('app.less');
});
