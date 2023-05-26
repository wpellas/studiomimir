/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js,blade.php}'],
  theme: {
    fontFamily: {
      primary: ['Lora', 'serif']
    },
    extend: {
      colors: {
        primary: '#be7272',
        secondary: '#F2F2F2'
      }, // Extend Tailwind's default colors
      spacing: {
        default: '1024px'
      }
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    }
  },
  plugins: [],
};

export default config;
