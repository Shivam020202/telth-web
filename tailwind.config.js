/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Rethink Sans", "sans-serif"],
            },
            backgroundImage: {
                "gradient-radial":
                    "radial-gradient(circle, var(--tw-gradient-stops))",
            },
        },
    },
    plugins: [],
};
