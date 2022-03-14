module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.{ts,tsx,vue,js}"
  ],
  theme: {
    extend: {
      colors: {
        "mekom-grey": "rgb(63, 63, 64)",
        "mekom-orange": "rgb(251, 152, 0)"
      },
      fontFamily: {
        sans: [
          "Andika", "sans-serif"
        ],
      },
    },
  },
  plugins: [],
};
