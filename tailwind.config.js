const path = require('path');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  important: '.detached-filters-scoped',
  darkMode: 'class',
  safelist: [
    'w-1/2',
    'w-1/3',
    'w-2/3',
    'w-1/4',
    'w-2/4',
    'w-3/4',
    'w-1/5',
    'w-2/5',
    'w-3/5',
    'w-4/5',
    'w-1/6',
    'w-2/6',
    'w-3/6',
    'w-4/6',
    'w-5/6',
  ],
};
