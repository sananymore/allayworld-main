/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        'favicon': "url('/assets/IMG/favicon.png')",
        'favicon-clean-blue-500': "url('/assets/IMG/favicon-clean-blue-500.png')",
        'favicon-clean-slate-200': "url('/assets/IMG/favicon-clean-slate-200.png')",
        'forest': "url('/assets/IMG/background.png')",
        'banner1': "url('/assets/IMG/banner.png')",
        'banner2': "url('/assets/IMG/banner2.png')",
      },
      width: {
        'calc': 'calc(100% + 1.3px)',
      },
    },
  },
  plugins: [],
}

