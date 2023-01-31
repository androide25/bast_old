let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');
mix.setResourceRoot(process.env.MIX_RESOURCE_ROOT);
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts')
   .sass('resources/assets/sass/app.scss', 'public/css');