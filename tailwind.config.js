/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spacing: {
                "full-20": "calc(100vh - 5rem)",
            },
        },
    },
    plugins: [],
};
