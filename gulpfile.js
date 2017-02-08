const elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js')
        .styles([
            './node_modules/animate.css/animate.css'
        ],'./public/css/plugins.css')
        .copy('node_modules/font-awesome/fonts/**/*','public/fonts')
        .livereload();
});
