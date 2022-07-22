const mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel applications. By default, we are compiling the CSS
| file for the application as well as bundling up all the JS files.
|
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/header.css', 'public/css')
    .postCss('resources/css/footer.css', 'public/css')
    .postCss('resources/css/home.css', 'public/css')
    .postCss('resources/css/illus.css', 'public/css')
    .postCss('resources/css/about.css', 'public/css')
    .postCss('resources/css/admin.css', 'public/css')
    .postCss('resources/css/projectView.css', 'public/css')
    .postCss('resources/css/login.css', 'public/css')
    .postCss('resources/css/404.css', 'public/css');
