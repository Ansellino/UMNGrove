<x-app-layout>
    <!-- Main Container -->
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-50">

        <!-- Responsive Hero Section -->
        <div class="relative overflow-hidden bg-center bg-no-repeat bg-cover p" style="background-image: url('{{ asset('images1/banner.webp') }}')">
            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative px-4 py-24 sm:px-6 sm:py-60 lg:scroll-py-72 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-5xl font-bold text-white sm:text-5xl md:text-6xl lg:text-7xl">
                        Welcome To Patikang
                    </h1>
                    <p class="mt-4 text-lg text-white sm:text-xl md:text-2xl lg:text-3xl">
                        Lembur Mangrove, Citeureup Tourism Village
                    </p>
                    <a href="{{ route('login') }}" class="inline-block px-8 py-4 mt-8 text-xl font-medium text-white transition-all duration-300 bg-orange-500 border-2 border-white rounded-md shadow-lg hover:bg-orange-600 hover:border-orange-300 hover:text-orange-100 hover:scale-105 shadow-orange-500/50">
                        Look Out!
                    </a>
                </div>
            </div>
        </div>

        <section class="py-12 sm:py-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">Our Progress is The Result of Collaboration</h2>
                <p class="mt-4 text-lg text-gray-600">We are proud to partner with these organizations:</p>
              </div>

            <div class="grid grid-cols-2 gap-6 mt-8 sm:grid-cols-3 lg:grid-cols-5">
                @foreach(range(1,5) as $i)
                    <div class="flex items-center justify-center p-3">
                        <img src="{{ asset('HOME/LOGO'.$i.'.png') }}"
                             alt="Partner Logo {{ $i }}"
                             class="w-auto h-12 sm:h-14 lg:h-16">
                    </div>
                @endforeach
            </div>

            <div class="px-4 mt-12 text-center rounded-xl">
                <p class="text-lg text-gray-600">
                    Interested in partnering with us?
                    <a href="mailto:hello@lemburmangrove.com"
                         class="inline-flex items-center font-medium text-blue-600 transition-colors hover:text-blue-700">
                        Contact us
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </p>
            </div>
            </div>
          </section>

        <section class="py-8 bg-white sm:py-12 lg:py-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
                <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Let's Help The Locals Grow</h2>
                <p class="mt-4 text-lg text-black sm:text-xl md:text-2xl">
                "Waktu terbaik menanam pohon adalah 20 tahun yang lalu dan waktu terbaik kedua adalah sekarang."
                </p>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-4 sm:gap-8 lg:mt-12">
                    <div class="transition-transform duration-300 transform hover:scale-105">
                        <div class="h-full p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6">
                            <div class="h-48">
                            <a href="{{ route('news.index') }}"><img src="{{ asset('HOME/local/tour-packages.jpg') }}" alt="Tour Package"
                            class="object-cover object-center w-full h-full rounded-lg"></a>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-center text-gray-900 sm:text-xl"><a href="{{ route('news.index') }}" class="transition-colors hover:text-blue-600">Tour Packages</a></h3>
                            <p class="mt-2 text-sm text-justify text-gray-800 sm:text-base">
                            Overtime Mangrove Tour Package with the concept of educational tourism, ecology that is sustainable for the socio-economy and environment.
                            </p>
                        </div>
                    </div>

                    <div class="transition-transform duration-300 transform hover:scale-105">
                        <div class="h-full p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6">
                            <div class="h-48">
                            <a href="{{ route('posts.index') }}"><img src="{{ asset('HOME/local/mangrove-products.jpg') }}" alt="Mangrove Products"
                            class="object-cover object-center w-full h-full rounded-lg"></a>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-center text-gray-900 sm:text-xl"><a href="{{ route('posts.index') }}" class="transition-colors hover:text-blue-600">Mangrove Products</a></h3>
                            <p class="mt-2 text-sm text-justify text-gray-800 sm:text-base">
                            Buying products produced from mangrove plants other than wood can improve the economy of local communities.
                            </p>
                        </div>
                    </div>

                    <div class="transition-transform duration-300 transform hover:scale-105">
                        <div class="h-full p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6">
                            <div class="h-48">
                            <a href="{{ route('csrprogram') }}"><img src="{{ asset('HOME/local/csr.png') }}" alt="CSR Programs"
                            class="object-cover object-center w-full h-full rounded-lg"></a>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-center text-gray-900 sm:text-xl"><a href="{{ route('csrprogram') }}" class="transition-colors hover:text-blue-600">CSR Programs</a></h3>
                            <p class="mt-2 text-sm text-justify text-gray-800 sm:text-base">
                            Program CSR perusahaan dalam perlindungan lingkungan di pesisir yang dapat meningkatkan daya beli masyarakat sekitar.
                            </p>
                        </div>
                    </div>

                    <div class="transition-transform duration-300 transform hover:scale-105">
                        <div class="h-full p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6">
                            <div class="h-48">
                            <a href="{{ route('researchdedication') }}"><img src="{{ asset('HOME/local/research.jpg') }}" alt="Research and Dedication"
                            class="object-cover object-center w-full h-full rounded-lg"> </a>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-center text-gray-900 sm:text-xl"><a href="{{ route('researchdedication') }}" class="transition-colors hover:text-blue-600">Research and Dedication</a></h3>
                            <p class="mt-2 text-sm text-justify text-gray-800 sm:text-base">
                            Academic research and service are needed in the sustainability of the lives of local people.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Registration & Payment Procedure
            </h2>
            </div>

            <div class="grid max-w-6xl grid-cols-1 gap-10 mx-auto mt-16 sm:mt-20 lg:grid-cols-4">
            <!-- Step 1 -->
            <div class="relative p-8 transition-all duration-300 bg-white border border-gray-100 shadow-lg rounded-2xl hover:shadow-xl hover:-translate-y-2 group">
                <div class="absolute left-0 right-0 flex justify-center mb-8 -top-6">
                <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white transition-transform duration-300 transform bg-blue-600 rounded-full shadow-lg group-hover:scale-110 group-hover:bg-blue-700">
                    1
                </div>
                </div>
                <div class="pt-8">
                <h3 class="mt-4 text-2xl font-semibold text-center text-gray-900">
                    Select Package
                </h3>
                <p class="mt-4 text-lg leading-relaxed text-center text-gray-600">
                    Browse and choose your preferred tour package or product from our curated offerings
                </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative p-8 transition-all duration-300 bg-white border border-gray-100 shadow-lg rounded-2xl hover:shadow-xl hover:-translate-y-2 group">
                <div class="absolute left-0 right-0 flex justify-center mb-8 -top-6">
                <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white transition-transform duration-300 transform bg-blue-600 rounded-full shadow-lg group-hover:scale-110 group-hover:bg-blue-700">
                    2
                </div>
                </div>
                <div class="pt-8">
                <h3 class="mt-4 text-2xl font-semibold text-center text-gray-900">
                    Contact Us
                </h3>
                <p class="mt-4 text-lg leading-relaxed text-center text-gray-600">
                    Reach out via WhatsApp:
                    <a href="https://wa.me/0817849463" class="block mt-2 font-medium text-blue-600 transition-colors hover:text-blue-700">
                    0817849463 (Deden)
                    </a>
                </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative p-8 transition-all duration-300 bg-white border border-gray-100 shadow-lg rounded-2xl hover:shadow-xl hover:-translate-y-2 group">
                <div class="absolute left-0 right-0 flex justify-center mb-8 -top-6">
                <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white transition-transform duration-300 transform bg-blue-600 rounded-full shadow-lg group-hover:scale-110 group-hover:bg-blue-700">
                    3
                </div>
                </div>
                <div class="pt-8">
                <h3 class="mt-4 text-2xl font-semibold text-center text-gray-900">
                    Submit Details
                </h3>
                <p class="mt-4 text-lg leading-relaxed text-center text-gray-600">
                    Provide your full name and the package/product you're interested in purchasing
                </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative p-8 transition-all duration-300 bg-white border border-gray-100 shadow-lg rounded-2xl hover:shadow-xl hover:-translate-y-2 group">
                <div class="absolute left-0 right-0 flex justify-center mb-8 -top-6">
                <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white transition-transform duration-300 transform bg-blue-600 rounded-full shadow-lg group-hover:scale-110 group-hover:bg-blue-700">
                    4
                </div>
                </div>
                <div class="pt-8">
                <h3 class="mt-4 text-2xl font-semibold text-center text-gray-900">
                    Complete Payment
                </h3>
                <p class="mt-4 text-lg leading-relaxed text-center text-gray-600">
                    Scan the provided QRIS code to complete your payment securely and instantly
                </p>
                </div>
            </div>
            </div>

            <div class="mt-16 text-center">
            <a href="{{ route('login') }}" class="inline-flex items-center px-8 py-4 text-lg font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Get Started
            <svg class="w-6 h-6 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
            </a>
            </div>
            </div>
        </section>

        <!-- Replace the product slideshow section -->
        <section class="py-10 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="mt-6 mb-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Featured Products</h2>
                    <p class="mt-4 mb-6 text-lg text-gray-600">Check out our latest collection</p>
                </div>

                <div class="relative mt-12">
                    <div class="max-w-5xl mx-auto overflow-hidden rounded-2xl">
                        <div class="grid grid-cols-4 gap-4" id="product-slideshow">
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="overflow-hidden transition-all duration-500 bg-gray-100 rounded-xl group">
                                    <div class="relative aspect-w-1 aspect-h-1">
                                        <img src="{{ asset('images1/' . $i . '.png') }}"
                                             alt="Product {{ $i }}"
                                             class="object-cover w-full h-48 transition-transform duration-300 sm:h-56 group-hover:scale-110"
                                             data-position="{{ $i - 1 }}">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Navigation Buttons (adjusted position for smaller container) -->
                    <button class="absolute flex items-center justify-center w-10 h-10 transition-all duration-200 -translate-y-1/2 rounded-full shadow-lg left-2 top-1/2 bg-white/90 hover:bg-white focus:outline-none" id="prev-slide">
                        <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="absolute flex items-center justify-center w-10 h-10 transition-all duration-200 -translate-y-1/2 rounded-full shadow-lg right-2 top-1/2 bg-white/90 hover:bg-white focus:outline-none" id="next-slide">
                        <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="py-12 bg-center bg-no-repeat bg-cover sm:py-16" style="background-image: url('{{ asset('images1/banner.webp') }}')">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div class="max-w-3xl mx-auto mb-5 text-center">
                <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl">Contact Us</h2>
              </div>

              <div class="grid grid-cols-1 gap-6 mt-10 lg:grid-cols-2 lg:gap-8">
                <div class="flex flex-col items-center justify-center p-8 transition-all duration-300 rounded-lg shadow-lg bg-white/90 hover:shadow-xl hover:transform hover:scale-105">
                  <h3 class="text-3xl font-bold text-center text-gray-900">About Us</h3>
                  <div class="space-y-6">
                    <!-- Address Card -->
                    <div class="p-4 transition-all duration-300 rounded-lg">
                        <div class="flex items-start space-x-4">
                            <div class="p-2 bg-blue-100 rounded-lg">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Our Location</h4>
                                <p class="mt-1 text-gray-600">
                                    Patikang Village, Citereup Village<br>
                                    Panimbang, Pandeglang<br>
                                    Banten, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="p-4 transition-all duration-300 rounded-lg">
                        <div class="flex items-start space-x-4">
                            <div class="p-2 bg-green-100 rounded-lg">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Contact Person</h4>
                                <p class="mt-1 text-gray-600">Deden: +62 817-849-463</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="p-4 transition-all duration-300 rounded-lg">
                        <div class="flex items-start space-x-4">
                            <div class="p-2 bg-purple-100 rounded-lg">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Operating Hours</h4>
                                <p class="mt-1 text-gray-600">Monday - Friday, 8:00 - 22:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                  <form action="mailto:your-email@example.com" method="POST" enctype="text/plain">
                    <div class="grid grid-cols-1 gap-6">
                      <div>
                        <label for="name" class="block text-sm font-medium text-black">Name</label>
                        <input type="text" name="name" id="name" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                      </div>
                      <div>
                        <label for="email" class="block text-sm font-medium text-black">Email Address</label>
                        <input type="email" name="email" id="email" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                      </div>
                      <div>
                        <label for="country" class="block text-sm font-medium text-black">Country</label>
                        <select name="country" id="country" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                          <option value="">Select Your Country</option>
                          <option value="Indonesia">Indonesia</option>
                        </select>
                      </div>
                      <div>
                        <label for="message" class="block text-sm font-medium text-black">Message</label>
                        <textarea name="message" id="message" rows="4" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                      </div>
                      <div>
                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                          Send
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
    </div>

    <!-- Replace the JavaScript section -->
    <script>
        const slideshow = document.getElementById('product-slideshow');
        const prevButton = document.getElementById('prev-slide');
        const nextButton = document.getElementById('next-slide');
        const totalImages = 8;
        const visibleImages = 4;
        let positions = [0, 1, 2, 3]; // Current image positions (0-based index)

        function updateImages() {
            const images = slideshow.querySelectorAll('img');
            images.forEach((img, index) => {
                const imagePosition = positions[index];
                img.src = `{{ asset('images1/') }}/${imagePosition + 1}.webp`;
                img.alt = `Product ${imagePosition + 1}`;

                // Add fade transition
                img.style.opacity = '0';
                setTimeout(() => {
                    img.style.opacity = '1';
                }, 25);
            });
        }

        function rotateRight() {
            positions = positions.map(pos => (pos + 1) % totalImages);
            updateImages();
        }

        function rotateLeft() {
            positions = positions.map(pos => (pos - 1 + totalImages) % totalImages);
            updateImages();
        }

        nextButton.addEventListener('click', () => {
            rotateRight();
        });

        prevButton.addEventListener('click', () => {
            rotateLeft();
        });

        // Auto-advance one image at a time
        let slideInterval = setInterval(rotateRight, 3000);

        // Pause on hover
        slideshow.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        // Resume on mouse leave
        slideshow.addEventListener('mouseleave', () => {
            slideInterval = setInterval(rotateRight, 3000);
        });

        // Add fade transition styles
        const style = document.createElement('style');
        style.textContent = `
            #product-slideshow img {
                transition: opacity 0.3s ease-in-out;
            }
        `;
        document.head.appendChild(style);

        // Mobile Menu JavaScript
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) { // md breakpoint
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
