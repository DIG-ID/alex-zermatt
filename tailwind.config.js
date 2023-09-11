/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Raleway', 'sans-serif'],
      montbold: ['Mont', 'sans-serif'],
      montlight: ['Mont Book', 'sans-serif'],
    },
    extend: {
      colors: {
        'green': '#10664F',
        'dark-green': '#032F35',
        'light-green': '#E6EADC',
        'lime-green': '#B6ED3E',
      },
    },
  },
  plugins: [
    //require('@tailwindcss/line-clamp'),
  ],
}
