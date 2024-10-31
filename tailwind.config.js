/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,twig}",
    "./vendor/wai-blue/adios/**/*.{tsx,twig}",
    "./vendor/wai-blue/adios/node_modules/primereact/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    // colors: {
    //   'white': '#1fb6ff',
    //   'primary': '#59aad3',
    //   'secondary': '#ff9800',
    //   // 'purple': '#7e5bef',
    //   // 'pink': '#ff49db',
    //   // 'orange': '#ff7849',
    //   // 'green': '#13ce66',
    //   // 'yellow': '#ffc82c',
    //   // 'gray-dark': '#273444',
    //   // 'gray': '#8492a6',
    //   // 'gray-light': '#d3dce6',
    // },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      colors: {
        'primary': '#05b9e9',
        'secondary': '#fecb00',
      },
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  },
  plugins: [],
}

