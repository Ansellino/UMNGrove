<div
    x-data="{
        totalImages: {{ $alpineData['totalImages'] }},
        visibleImages: {{ $alpineData['visibleImages'] }},
        positions: {{ json_encode($alpineData['positions']) }},
        slideInterval: null,
        baseUrl: '{{ $alpineData['baseUrl'] }}',
        rotationSpeed: {{ $alpineData['rotationSpeed'] }},
        elementId: '{{ $alpineData['elementId'] }}',

        init() {
            // Initialize images
            this.updateImages();

            // Start auto-rotation
            this.startAutoRotation();

            // Add fade transition styles
            const style = document.createElement('style');
            style.textContent = `
                #${this.elementId} img {
                    transition: opacity 0.3s ease-in-out;
                }
            `;
            document.head.appendChild(style);
        },

        updateImages() {
            const images = this.$refs.slideshow.querySelectorAll('img');
            images.forEach((img, index) => {
                const imagePosition = this.positions[index];
                img.src = `${this.baseUrl}/${imagePosition + 1}.webp`;
                img.alt = `Product ${imagePosition + 1}`;

                // Add fade transition
                img.style.opacity = '0';
                setTimeout(() => {
                    img.style.opacity = '1';
                }, 25);
            });
        },

        rotateRight() {
            this.positions = this.positions.map(pos => (pos + 1) % this.totalImages);
            this.updateImages();
        },

        rotateLeft() {
            this.positions = this.positions.map(pos => (pos - 1 + this.totalImages) % this.totalImages);
            this.updateImages();
        },

        startAutoRotation() {
            // Clear any existing interval first
            if (this.slideInterval) {
                clearInterval(this.slideInterval);
            }

            this.slideInterval = setInterval(() => {
                this.rotateRight();
            }, this.rotationSpeed);
        },

        pauseAutoRotation() {
            clearInterval(this.slideInterval);
        },

        resumeAutoRotation() {
            this.startAutoRotation();
        }
    }"
    class="relative mt-12"
>
    <div class="max-w-5xl mx-auto overflow-hidden rounded-2xl">
        <div class="grid grid-cols-4 gap-4" :id="elementId" x-ref="slideshow">
            @for ($i = 1; $i <= $visibleImages; $i++)
                <div class="overflow-hidden transition-all duration-500 bg-gray-100 rounded-xl group">
                    <div class="relative aspect-w-1 aspect-h-1">
                        <img src="{{ asset($baseUrl . '/' . $i . '.webp') }}"
                             alt="Product {{ $i }}"
                             class="object-cover w-full transition-transform duration-300 {{ $height }} group-hover:scale-110">
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button class="absolute flex items-center justify-center w-10 h-10 transition-all duration-200 -translate-y-1/2 rounded-full shadow-lg left-2 top-1/2 bg-white/90 hover:bg-white focus:outline-none"
           x-on:click="rotateLeft"
           @mouseover="pauseAutoRotation"
           @mouseleave="resumeAutoRotation">
        <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>

    <button class="absolute flex items-center justify-center w-10 h-10 transition-all duration-200 -translate-y-1/2 rounded-full shadow-lg right-2 top-1/2 bg-white/90 hover:bg-white focus:outline-none"
           x-on:click="rotateRight"
           @mouseover="pauseAutoRotation"
           @mouseleave="resumeAutoRotation">
        <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
</div>
