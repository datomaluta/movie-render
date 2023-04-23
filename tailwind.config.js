/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
      },
      fontFamily:{
        'sansation-reg':['SansationRegular','sans-serif'],
        'sansation-bold':['SansationBold','sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}