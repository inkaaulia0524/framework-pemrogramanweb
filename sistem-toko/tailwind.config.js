import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
       fontFamily: {
        sans: ["Poppins", "sans-serif"],
  
      colors: {
        navy: {
          DEFAULT: '#000080', 
          light: '#001f4d',   
          dark: '#00004d',     
          },
        },
      },
    },
  },
  plugins: [],
}

