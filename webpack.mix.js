let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
  }
}


mix
  .stylus(
    'resources/stylus/custom.styl',
    'assets/css/single/'
  )
  .options({
    postCss: [
      tailwindcss('tailwind.js')
    ]
})