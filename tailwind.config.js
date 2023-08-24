/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                secondary: {
                    DEFAULT: "#07afa6", // Default shade
                    darker: "#056e68", // Darker shade
                    lighter: "#0bb3ad", // Lighter shade
                },
                primary: {
                    100: "#b2ebe8",
                    200: "#8ae4df",
                    300: "#61ddd6",
                    400: "#39d6cd",
                    500: "#07afa6", // Default shade
                    600: "#068f8a", // Darker shade
                    700: "#056f6e", // Darker shade
                    800: "#045f5e", // Darker shade
                    900: "#034f4f", // Darker shade
                },
            },
        },
    },
    plugins: [],
};
