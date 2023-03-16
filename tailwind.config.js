/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    },
    // screen 1536 to  1023
    extend: {
      backgroundImage: {
        'info': "url('/assets/infobg.png')",
      },
      colors: {
        salmon: 'hsl(6,93%,71%)',
      },
      letterSpacing: {
        widest: '.3em',
      },
    },
  },
  plugins: [],
}
