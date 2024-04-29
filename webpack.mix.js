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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

// Badaso
mix.js("vendor/badaso/core/src/resources/js/app.js", "public/js/badaso.js")
    .sass("vendor/badaso/core/src/resources/js/assets/scss/style.scss", "public/css/badaso.css")
    .vue()
// Badaso Landy Theme
     mix.js("vendor/badaso/landy-theme/src/resources/js/app.js", "public/js/landy-theme.js")
     .js("vendor/badaso/landy-theme/src/resources/js/index/landy-theme.js", "public/js/index/landy-theme.js")
.css("vendor/badaso/landy-theme/src/resources/js/assets/css/style.css","public/css/landy-theme.css",{},[
require("tailwindcss")('./tailwind-landy.config.js'),
require("autoprefixer"),
]
)