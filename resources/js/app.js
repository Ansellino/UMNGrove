import "./bootstrap";

// Import Alpine.js if it's not already imported
import Alpine from "alpinejs";
window.Alpine = Alpine;

// Import your components
import productSlideshow, { mobileMenu } from "./components/product-slideshow";

// Register your Alpine components
Alpine.data("productSlideshow", productSlideshow);
Alpine.data("mobileMenu", mobileMenu);

Alpine.start();
