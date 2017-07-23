var Encore = require('@symfony/webpack-encore');

Encore
// directory where all compiled assets will be stored
    .setOutputPath('web/public/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/public')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    .addEntry('app', './app/Resources/static/js/main.js')
    // will output as web/build/global.css
    //.addStyleEntry('global', './app/Resources/static/css/global.scss')

    // allow sass/scss files to be processed
    .enableSassLoader()
    .addLoader({ test: /\.html$/, loader: 'html-loader?minimize=false&attrs=img:src img:error-src', exclude: '/node_modules/'})
    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();