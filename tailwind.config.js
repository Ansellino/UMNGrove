import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                xs: "475px",
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
                ...defaultTheme.screens,
            },
            keyframes: {
                float: {
                    "0%, 100%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(-10px)" },
                },
            },
            boxShadow: {
                "3xl": "0 35px 60px -15px rgba(0, 0, 0, 0.3)",
            },
            animation: {
                float: "float 3s ease-in-out infinite",
            },
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "grid-pattern":
                    "linear-gradient(to right, rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(to bottom, rgba(0,0,0,0.1) 1px, transparent 1px)",
            },
            backgroundSize: {
                grid: "20px 20px",
            },
            transitionProperty: {
                height: "height",
                spacing: "margin, padding",
            },
            backdropBlur: {
                xs: "2px",
            },
            zIndex: {
                50: "50",
            },
            fontSize: {
                0.5: "0.125rem",
                sm: "0.875rem",
                xs: "0.75rem",
            },
            spacing: {},
        },
    },
    plugins: [forms, require("@tailwindcss/forms")],
};
