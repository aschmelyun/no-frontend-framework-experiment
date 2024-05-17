/** @type {import('tailwindcss').Config} */
import Forms from '@tailwindcss/forms'
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    Forms
  ],
}

