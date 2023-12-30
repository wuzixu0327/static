/**
 * This is a minimal config.
 *
 * If you need the full config, get it from here:
 * https://unpkg.com/browse/tailwindcss@latest/stubs/defaultConfig.stub.js
 */

module.exports = {
    content: [
        /**
         * HTML. Paths to Django template files that will contain Tailwind CSS classes.
         */

        /*  Templates within theme app (<tailwind_app_name>/templates), e.g. base.html. */
        // '../templates/**/*.html',

        /*
         * Main templates directory of the project (BASE_DIR/templates).
         * Adjust the following line to match your project structure.
         */
        // '../../templates/**/*.html',

        /*
         * Templates in other django apps (BASE_DIR/<any_app_name>/templates).
         * Adjust the following line to match your project structure.
         */
        '../../**/templates/**/*.html',
        '../static/**/*.js',


        /**
         * JS: If you use Tailwind CSS in JavaScript, uncomment the following lines and make sure
         * patterns match your project structure.
         */
        /* JS 1: Ignore any JavaScript in node_modules folder. */
        // '!../../**/node_modules',
        /* JS 2: Process all JavaScript files in the project. */
        // '../../**/*.js',

        /**
         * Python: If you use Tailwind CSS classes in Python, uncomment the following line
         * and make sure the pattern below matches your project structure.
         */
        // '../../**/*.py'
    ],
    darkMode: "class",
    theme: {
        container: {
          center: true,
        },
        extend: {
          colors: {
            primary: {
              DEFAULT: "#4361ee",
              light: "#eaf1ff",
              "dark-light": "rgba(67,97,238,.15)",
            },
            secondary: {
              DEFAULT: "#805dca",
              light: "#ebe4f7",
              "dark-light": "rgb(128 93 202 / 15%)",
            },
            success: {
              DEFAULT: "#00ab55",
              light: "#ddf5f0",
              "dark-light": "rgba(0,171,85,.15)",
            },
            danger: {
              DEFAULT: "#e7515a",
              light: "#fff5f5",
              "dark-light": "rgba(231,81,90,.15)",
            },
            warning: {
              DEFAULT: "#e2a03f",
              light: "#fff9ed",
              "dark-light": "rgba(226,160,63,.15)",
            },
            info: {
              DEFAULT: "#2196f3",
              light: "#e7f7ff",
              "dark-light": "rgba(33,150,243,.15)",
            },
            dark: {
              DEFAULT: "#3b3f5c",
              light: "#eaeaec",
              "dark-light": "rgba(59,63,92,.15)",
            },
            black: {
              DEFAULT: "#0e1726",
              light: "#e3e4eb",
              "dark-light": "rgba(14,23,38,.15)",
            },
            white: {
              DEFAULT: "#ffffff",
              light: "#e0e6ed",
              dark: "#888ea8",
            },
          },
          fontFamily: {
            nunito: ["Nunito", "sans-serif"],
          },
          spacing: {
            4.5: "18px",
          },
          boxShadow: {
            "3xl":
              "0 2px 2px rgb(224 230 237 / 46%), 1px 6px 7px rgb(224 230 237 / 46%)",
          },
          typography: {
            DEFAULT: {
              css: {
                h1: { fontSize: "40px" },
                h2: { fontSize: "32px" },
                h3: { fontSize: "28px" },
                h4: { fontSize: "24px" },
                h5: { fontSize: "20px" },
                h6: { fontSize: "16px" },
              },
            },
          },
        },
      },
    plugins: [
        /**
         * '@tailwindcss/forms' is the forms plugin that provides a minimal styling
         * for forms. If you don't like it or have own styling for forms,
         * comment the line below to disable '@tailwindcss/forms'.
         */
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
