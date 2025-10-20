/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './resources/**/*.js',
  ],
  theme: {
    extend: {

       fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
         merriweather: ['Merriweather', 'serif'],
        montserrat: ['Montserrat', 'sans-serif'],
      },


    },
  },
}


