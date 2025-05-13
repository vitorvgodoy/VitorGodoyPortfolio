const mix = require('laravel-mix');

// Main SCSS compilation (matches 'compile:scss')
mix.sass('resources/sass/main.scss', 'public/css/style.css')
   .options({
     processCssUrls: false, // Disable URL rewriting
     postCss: [
       require('autoprefixer')({
         overrideBrowserslist: ['last 10 versions']
       })
     ],
     sassOptions: {
       outputStyle: 'compressed' // Matches 'compress:css'
     }
   });

// Copy static assets if needed
mix.copyDirectory('resources/assets', 'public');