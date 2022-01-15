const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');

//mix.setPublicPath('../../public/assets/modules/customizer');
mix.setPublicPath('public/assets/');

mix.options({
    processCssUrls: false,
    clearConsole: true,
    purifyCss: true,
    extractVueStyles: false,
});

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/customizer.js');
mix.sass( __dirname + '/Resources/assets/sass/app.scss', 'css/customizer.css');

if (mix.inProduction()) {
    mix.version();
}