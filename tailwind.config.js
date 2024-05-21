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
      screens: {
        'smaller' : [
          {'min': '100px', 'max': '768px'}
        ],
        'larger' : [
          {'min': '1300px', 'max': '2400px'}
        ],
      },
      colors : {
        'LightBlue' : '#B8D8E5',
        'DarkBlueish' : '#1866B7',
        'OrangeIsh' : '#FFAB00',
        'BlueDark' : '#003974',
        'biru-muda' : '#D5E9FA',
        'biru-tuwak' : '#003974',
        'LightGrey' : '#A8A8A8',
        'DarkWhite' : '#E0E0E0',
        'biru-baru' : '#4FA3C6',
        'DarkGrey' : '#6F6F6F',
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
