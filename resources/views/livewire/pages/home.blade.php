{{-- filepath: c:\Users\AnselZorro\Desktop\Thesis\Portofolio\Projectan\patikang\resources\views\livewire\pages\home.blade.php --}}
<div>
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
                @foreach($partners as $partner)
                    <div class="flex items-center justify-center p-3">
                        <img src="{{ asset($partner['logo']) }}"
                             alt="{{ $partner['alt'] }}"
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
                    @foreach($initiatives as $initiative)
                    <div class="transition-transform duration-300 transform hover:scale-105">
                        <div class="h-full p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6">
                            <div class="h-48">
                                <a href="{{ route($initiative['route']) }}"><img src="{{ asset($initiative['image']) }}" alt="{{ $initiative['title'] }}"
                                class="object-cover object-center w-full h-full rounded-lg"></a>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-center text-gray-900 sm:text-xl"><a href="{{ route($initiative['route']) }}" class="transition-colors hover:text-blue-600">{{ $initiative['title'] }}</a></h3>
                            <p class="mt-2 text-sm text-justify text-gray-800 sm:text-base">
                                {{ $initiative['description'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Registration & Payment Procedure Section -->
        <section class="py-16 bg-gradient-to-b from-white to-gray-50 sm:py-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <!-- Section Header with enhanced styling -->
                <div class="max-w-3xl mx-auto text-center">
                    <span class="inline-block px-3 py-1 text-sm font-medium text-blue-700 bg-blue-100 rounded-full">Easy Process</span>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl md:text-5xl">
                        Registration &amp; Payment Procedure
                    </h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Complete your booking in just a few simple steps
                    </p>
                </div>

                <!-- Responsive Grid - Adjusts from 1 column on mobile to 4 on desktop -->
                <div class="grid max-w-6xl grid-cols-1 gap-8 mx-auto mt-12 sm:mt-16 md:grid-cols-2 lg:grid-cols-4 sm:gap-y-12">
                    @foreach($registrationSteps as $step)
                    <!-- Step {{ $step['number'] }} -->
                    <div class="relative p-6 transition-all duration-300 bg-white border border-gray-100 shadow-lg sm:p-8 rounded-2xl hover:shadow-xl hover:-translate-y-2 group">
                        <!-- Numbered circle indicator -->
                        <div class="absolute left-0 right-0 flex justify-center -top-6">
                            <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white transition-transform duration-300 transform bg-blue-600 rounded-full shadow-lg group-hover:scale-110 group-hover:bg-blue-700">
                                {{ $step['number'] }}
                            </div>
                        </div>

                        <!-- Step Icon -->
                        <div class="flex justify-center pt-6">
                            <svg class="w-16 h-16 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"></path>
                            </svg>
                        </div>

                        <div class="pt-4">
                            <h3 class="mt-2 text-xl font-semibold text-center text-gray-900 sm:text-2xl">
                                {{ $step['title'] }}
                            </h3>
                            <p class="mt-3 text-base leading-relaxed text-center text-gray-600 sm:text-lg">
                                {{ $step['description'] }}
                                @if(isset($step['whatsapp']))
                                <a href="https://wa.me/{{ $step['whatsapp'] }}" class="block mt-2 font-medium text-blue-600 transition-colors hover:text-blue-700">
                                    {{ $step['whatsappDisplay'] }}
                                </a>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Progress Connector - Only visible on larger screens -->
                <div class="hidden max-w-6xl mx-auto -mt-24 lg:block">
                    <div class="flex items-center justify-between px-16">
                        <div class="w-full h-1 bg-blue-200"></div>
                    </div>
                </div>

                <!-- Visual Progress - For mobile/tablet -->
                <div class="flex justify-center mt-10 lg:hidden">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        <div class="w-12 h-1 bg-blue-300"></div>
                        <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        <div class="w-12 h-1 bg-blue-300"></div>
                        <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        <div class="w-12 h-1 bg-blue-300"></div>
                        <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                    </div>
                </div>

                <!-- Call to Action Button -->
                <div class="mt-32 text-center">
                    <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-4 text-lg font-medium text-white transition-all duration-300 bg-blue-600 border border-transparent rounded-md shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 hover:scale-105 sm:px-8">
                        Get Started
                        <svg class="w-5 h-5 ml-2 -mr-1 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <!-- Secondary action for users who need more info -->
                    <div class="mt-4">
                        <a href="/contact" class="inline-flex items-center text-sm font-medium text-blue-600 transition-colors hover:text-blue-800">
                            Have questions? Contact us
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product slideshow section -->
        <section class="py-10 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="mt-6 mb-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Featured Products</h2>
                    <p class="mt-4 mb-6 text-lg text-gray-600">Check out our latest collection</p>
                </div>

                <livewire:components.product-slideshow
                    :total-images="8"
                    :visible-images="4"
                    :rotation-speed="3000"
                    :base-url="'images1'"
                    :identifier="'product-slideshow'"
                    :height="'h-48 sm:h-56'" />
            </div>
        </section>

        <!-- Contact Section -->
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
                                    {{ $location['line1'] }}<br>
                                    {{ $location['line2'] }}<br>
                                    {{ $location['line3'] }}
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
                                <p class="mt-1 text-gray-600">{{ $contactName }}: {{ $contactPhone }}</p>
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
                                <p class="mt-1 text-gray-600">{{ $operatingHours }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                  <form action="mailto:hello@lemburmangrove.com" method="POST" enctype="text/plain">
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
</div>
