/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      'poppins':['Poppins']
    },
    container:{
      center:true,
    },
    extend: {
    
    },
  },
  plugins: [
        {tailwindcss: {},
        autoprefixer: {},
       }
      //  require('@tailwindcss/forms'),
  ],
}
