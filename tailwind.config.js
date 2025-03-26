import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const {
    default: flattenColorPalette,
  } = require("tailwindcss/lib/util/flattenColorPalette")

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                scroll:
                  "scroll var(--animation-duration, 40s) var(--animation-direction, forwards) linear infinite",
              },
            keyframes: {
                scroll: {
                  to: {
                    transform: "translate(calc(-50% - 0.5rem))",
                  },
                },
              },
            colors: {
                background: "var(--background)",
                foreground: "var(--foreground)",
                hastadewa: "#021B79",
                lightHastadewa: "#0575E6",
                yellowHastadewa: "#F9971E",
                lightYellowHastadewa: "#FFD200",
                grayHastadewa: "rgb(99,99,99)"
              },
        },
    },

    plugins: [forms, typography,addVariablesForColors],
};
function addVariablesForColors({ addBase, theme }) {
    let allColors = flattenColorPalette(theme("colors"));
    let newVars = Object.fromEntries(
      Object.entries(allColors).map(([key, val]) => [`--${key}`, val])
    );
   
    addBase({
      ":root": newVars,
    });
  }