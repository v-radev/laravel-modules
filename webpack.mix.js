let mix = require('laravel-mix');

mix.js('modules/Main/Resources/assets/js/app.js', 'public/js')
  .sass('modules/Main/Resources/assets/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false
  })
  .sourceMaps()
  .version();
