const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

//mix.browserSync(process.env.APP_URL);
mix.webpackConfig({
  plugins: [
    new BrowserSyncPlugin({
      open: 'external',
      host: process.env.APP_URL,
      proxy: process.env.APP_URL,
      files: ['resources/views/**/*.php', 'app/**/*.php', 'routes/**/*.php']
    })
  ]
});
