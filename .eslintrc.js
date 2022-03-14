module.exports = {
  extends: [
    "eslint:recommended",
    "plugin:vue/essential",
    "plugin:prettier/recommended",
  ],
  parser: "babel-eslint",
  parserOptions: {
    sourceType: "module",
  },
  rules: {
    "no-console": "off",
    "no-undef": "off",
  },
};
