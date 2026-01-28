/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "./resources/**/*.{js,css}",
  ],
  darkMode: 'class', 
  theme: {
    extend: {
      colors: {
        'brand-bg': 'var(--brand-bg)',
        'brand-primary': 'var(--brand-primary)',
        'brand-secondary': 'var(--brand-secondary)',
        'brand-tertiary': 'var(--brand-tertiary)',
        'brand-muted': 'var(--brand-muted)',
        'brand-accent': 'var(--brand-accent)',
      },
    },
  },
  plugins: [],
}