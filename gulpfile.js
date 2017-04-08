const elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js')
        .styles([
            './node_modules/animate.css/animate.css',
            './node_modules/lightbox2/dist/css/lightbox.css'
        ],'./public/css/plugins.css')
        .scripts(['./node_modules/lightbox2/dist/js/lightbox.js'],
            './public/js/vendor.js')
        .copy('node_modules/font-awesome/fonts/**/*','public/fonts')
        .copy('node_modules/owl.carousel/dist/assets/owl.video.play.png', 'public/css')
        .livereload();
});
