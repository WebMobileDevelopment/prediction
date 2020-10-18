const mix = require('laravel-mix');




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

//fonts
mix.copy('node_modules/@coreui/icons/fonts', 'public/render/fonts');


mix.sass('resources/sass/app.scss', 'public/render/css');
mix.sass('resources/sass/frontend.scss', 'public/render/css');
mix.sass('resources/sass/auth.scss', 'public/render/css');

//npm package css copy
mix.copy('node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css', 'public/render/css');
mix.copy('node_modules/cropperjs/dist/cropper.css', 'public/render/css');
//icons
mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/render/css');
mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/render/css');
mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/render/css');
mix.copy('node_modules/@coreui/icons/svg/flag', 'public/render/svg/flag');
mix.copy('node_modules/@coreuirender/icons/sprites/', 'public/renderrender/icons/sprites');



//************** SCRIPTS ****************** 
mix.js('resources/js/app.js', 'public/render/js');
// npm package js copy
mix.copy('node_modules/axios/dist/axios.min.js', 'public/render/js');
mix.copy('node_modules/moment/moment.js', 'public/render/js');
mix.copy('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/render/js');
mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/render/js');
mix.copy('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.bundle.js', 'public/render/js');
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/render/js');
// views scripts

// details scripts
// mix.copy('resources/js/coreui/main.js', 'public/render/js');
// mix.copy('resources/js/coreui/colors.js', 'public/render/js');
// mix.copy('resources/js/coreui/charts.js', 'public/render/js');
// mix.copy('resources/js/coreui/widgets.js', 'public/render/js');
// mix.copy('resources/js/coreui/popovers.js', 'public/render/js');
// mix.copy('resources/js/coreui/tooltips.js', 'public/render/js');
// // details scripts admin-panel
// mix.js('resources/js/coreui/menu-create.js', 'public/render/js');
// mix.js('resources/js/coreui/menu-edit.js', 'public/render/js');
// mix.js('resources/js/coreui/media.js', 'public/render/js');
// mix.js('resources/js/coreui/media-cropp.js', 'public/render/js');
// mix.copy('resources/js/cropper_script.js', 'public/render/js');
// mix.copy('resources/js/cropper.js', 'public/render/js');
//*************** OTHER ****************** 

//images
// mix.copy('resources/assets', 'public/render/assets');
// mix.copy('resources/front', 'public/render/front');


// version does not work in hmr mode
if (process.env.npm_lifecycle_event !== 'hot') {
    mix.version()
}
const path = require('path');
// fix css files 404 issue
mix.webpackConfig({
    devServer: {
        contentBase: path.resolve(__dirname, 'public'),
    }
});
mix.browserSync('127.0.0.1:8000');