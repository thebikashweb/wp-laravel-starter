
const mix = require('laravel-mix');
const Fiber = require("fibers");
let productionSourceMaps = false;
mix.js('resources/js/app.js', 'public/js').vue({ version: 2 })
mix.js('resources/js/custom.js', 'public/js')
	.sass('sass/style.scss', 'public/css')
    .options({
        fiber: Fiber,
        processCssUrls: false,
    })
    .sourceMaps(productionSourceMaps, 'source-map')
    .webpackConfig(require('./webpack.config'));

    mix.browserSync({
        proxy: 'http://localhost:10019/',
        files: [ 'public/js/**/*.js', 'public/css/**/*.css', '*/**/*.php'],
    })

