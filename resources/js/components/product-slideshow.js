export default function productSlideshow() {
    return {
        totalImages: 8,
        visibleImages: 4,
        positions: [0, 1, 2, 3], // Current image positions (0-based index)
        slideInterval: null,

        init() {
            // Initialize images
            this.updateImages();

            // Start auto-rotation
            this.startAutoRotation();

            // Add fade transition styles
            const style = document.createElement("style");
            style.textContent = `
                #product-slideshow img {
                    transition: opacity 0.3s ease-in-out;
                }
            `;
            document.head.appendChild(style);
        },

        updateImages() {
            const images = this.$refs.slideshow.querySelectorAll("img");
            images.forEach((img, index) => {
                const imagePosition = this.positions[index];
                img.src = `${this.imageBasePath}/${imagePosition + 1}.webp`;
                img.alt = `Product ${imagePosition + 1}`;

                // Add fade transition
                img.style.opacity = "0";
                setTimeout(() => {
                    img.style.opacity = "1";
                }, 25);
            });
        },

        rotateRight() {
            this.positions = this.positions.map(
                (pos) => (pos + 1) % this.totalImages
            );
            this.updateImages();
        },

        rotateLeft() {
            this.positions = this.positions.map(
                (pos) => (pos - 1 + this.totalImages) % this.totalImages
            );
            this.updateImages();
        },

        startAutoRotation() {
            this.stopAutoRotation();
            this.slideInterval = setInterval(() => this.rotateRight(), 12000);
        },

        stopAutoRotation() {
            if (this.slideInterval) {
                clearInterval(this.slideInterval);
                this.slideInterval = null;
            }
        },

        get imageBasePath() {
            return this.$root.dataset.imageBasePath || "";
        },
    };
}

// Mobile menu component
export function mobileMenu() {
    return {
        isOpen: false,

        init() {
            // Handle window resize
            window.addEventListener("resize", () => {
                if (window.innerWidth >= 1024) {
                    // lg breakpoint
                    this.isOpen = false;
                }
            });
        },

        toggle() {
            this.isOpen = !this.isOpen;
        },

        close() {
            this.isOpen = false;
        },
    };
}
