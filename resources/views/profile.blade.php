<x-app-layout>
    <!-- Header with Enhanced Styling -->
    <div class="bg-gradient-to-r from-blue-50 via-white to-blue-50">
        <div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4">
                <!-- Profile Avatar -->
                <div class="flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full">
                    <span class="text-2xl font-bold text-white">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">
                        {{ __('Profile Settings') }}
                    </h2>
                    <p class="text-sm text-gray-600">
                        {{ __('Manage your account settings and security preferences') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-12">
                <!-- Sidebar Navigation -->
                <div class="hidden md:col-span-3 md:block">
                    <nav class="space-y-1" x-data="{ active: 'profile' }">
                        <a href="#profile"
                           @click="active = 'profile'"
                           :class="{'bg-blue-50 border-blue-600 text-blue-600': active === 'profile',
                                  'border-transparent text-gray-600 hover:bg-gray-50': active !== 'profile'}"
                           class="flex items-center px-3 py-2 text-sm font-medium border-l-4">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Profile Information
                        </a>

                        <a href="#password"
                           @click="active = 'password'"
                           :class="{'bg-blue-50 border-blue-600 text-blue-600': active === 'password',
                                  'border-transparent text-gray-600 hover:bg-gray-50': active !== 'password'}"
                           class="flex items-center px-3 py-2 text-sm font-medium border-l-4">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Password
                        </a>

                        <a href="#delete"
                           @click="active = 'delete'"
                           :class="{'bg-red-50 border-red-600 text-red-600': active === 'delete',
                                  'border-transparent text-gray-600 hover:bg-gray-50': active !== 'delete'}"
                           class="flex items-center px-3 py-2 text-sm font-medium border-l-4">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete Account
                        </a>
                    </nav>
                </div>

                <!-- Main Content Area -->
                <div class="md:col-span-9">
                    <div class="space-y-6">
                        <!-- Profile Information Section -->
                        <div id="profile" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6">
                                <livewire:profile.update-profile-information-form />
                            </div>
                        </div>

                        <!-- Password Section -->
                        <div id="password" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6">
                                <livewire:profile.update-password-form />
                            </div>
                        </div>

                        <!-- Delete Account Section -->
                        <div id="delete" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6">
                                <livewire:profile.delete-user-form />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alpine.js for Interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-app-layout>
