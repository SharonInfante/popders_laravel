/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
<<<<<<< HEAD
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
      //  require('@tailwindcss/forms')
  ],
=======
    extend: {},
  },
  plugins: [],
>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
}
