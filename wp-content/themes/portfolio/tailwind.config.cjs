// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        'pfd-dark-shade': '#2f2b2a',
        'pfd-very-dark-shade': '#2c2220',
        'pfd-black-fosco': '#26251c',
        'pfd-green-yellow': '#adff2f',
        'pfd-green-title' : '#a1d3a2'
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};
