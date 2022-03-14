const mix = require("laravel-mix");
const path = require("path");

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

mix
  .ts("resources/js/app.ts", "public/js")
  .vue({ version: 3 })
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
    require("autoprefixer"),
  ])
  .options({
    hmrOptions: {
      host: "localhost",
      port: "3030",
    },
  })
  .webpackConfig({
    output: {
      chunkFilename: "js/[name].js?id=[chunkhash]",
    },
    resolve: {
      alias: {
        "@": path.resolve("./resources/js"),
      },
    },
    devServer: {
      host: "0.0.0.0",
      port: "3030",
    },
  })
  .version()
  .sourceMaps();
