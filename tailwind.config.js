const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },

    extend: {
      colors: {
        primary: '#E20F0F',
        body: '#D1D1D1',
        'dark-fill': '#2A2A2A',
        stroke: '#4A4A4A',
      },

      fontFamily: {
        'sans': ['"Rajdhani"', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

