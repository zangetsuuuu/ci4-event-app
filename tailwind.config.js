/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app/Views/**/*.php'],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [{
      light: {
        ...require("daisyui/src/theming/themes")["light"],
        primary: "#377cfb",
      },
    },],
  }
}

