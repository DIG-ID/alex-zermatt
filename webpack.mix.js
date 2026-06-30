// webpack.mix.js

const os = require('os');
const path = require('path');

// Caminho para os certificados do Local by WPEngine
const certPath = path.join(
  os.homedir(),
  os.platform() === 'win32'
    ? 'AppData/Roaming/Local/run/router/nginx/certs'
    : 'Library/Application Support/Local/run/router/nginx/certs'
);


const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

// Shared sass-loader options:
// - api: 'modern' uses Dart Sass's modern API (silences the "legacy JS API"
//   deprecation that ships with sass-loader's default).
// - silenceDeprecations: ['import'] mutes the @import deprecation. Vendor CSS
//   (Swiper/Fancybox) can only be pulled in via @import — @use loads Sass files
//   only, not plain CSS — and the @tailwind directives prevent moving @use to
//   the top of main.sass, so @import stays. Revisit when Dart Sass ships a
//   module-system path for plain CSS (or on the next Tailwind upgrade).
const sassLoaderOptions = {
  api: 'modern',
  sassOptions: {
    style: 'expanded',
    // Resolve bare node_modules vendor CSS (Swiper/Fancybox) ourselves — the
    // modern API doesn't follow package "exports" maps the way the legacy
    // sass-loader importer did, so imports point at the real files + this path.
    loadPaths: ['node_modules'],
    silenceDeprecations: ['import'],
  },
};

mix
  .setResourceRoot('./')
  .setPublicPath('dist')
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
  })

  .js('assets/js/main.js', 'js')
  //.js('assets/js/blog-ajax.js', 'js')
  .sass('assets/sass/main.sass', 'css', sassLoaderOptions)
  .sass('assets/sass/admin-login.sass', 'css', sassLoaderOptions)
  .options({
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })

  .browserSync({
    proxy: "https://hotel-alex-zermatt.digid/",
    host: "hotel-alex-zermatt.digid",
    open: "external",
    port: 3000,
    ws: true,
    https: {
      key: path.join(certPath, 'hotel-alex-zermatt.digid.key'),
      cert: path.join(certPath, 'hotel-alex-zermatt.digid.crt'),
    },
    files: ["./**/*.php", "./dist/js/*.js", "./dist/css/*.css"]
  })
  .disableNotifications();
  

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}