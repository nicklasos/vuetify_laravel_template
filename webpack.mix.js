const mix = require('laravel-mix');
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');

mix.disableNotifications();

mix.options({
    processCssUrls: false,
});

mix.js('resources/js/app.js', 'public/js').
    sass('resources/sass/app.scss', 'public/css').
    sass('resources/sass/auth/app.scss', 'public/css/auth');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.json', '.vue'],
        alias: {
            '~': path.join(__dirname, './resources/js'),
            '@': path.join(__dirname, './resources/js/components/'),
        },
    },
    plugins: [
        new VuetifyLoaderPlugin(),
    ],
});
