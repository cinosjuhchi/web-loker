/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {

      colors : {
        'LightBlue' : '#B8D8E5',
        'DarkBlueish' : '#1866B7',
        'OrangeIsh' : '#FFAB00',
        'BlueDark' : '#003974',
        'biru-muda' : '#D5E9FA',
        'biru-tuwak' : '#003974',
        'biru-baru' : '#4FA3C6',
      },
      fontFamily : {
        JakartaSans : ['Plus Jakarta Sans'],
      }

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

