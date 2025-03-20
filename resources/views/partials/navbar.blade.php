<!-- Navbar Component -->
<nav class="fixed z-50 w-full backdrop-blur-md bg-white">
    <!-- Top Accent Line -->
    <div class="absolute inset-x-0 top-0 h-0.5 bg-gradient-to-r from-violet-800 via-indigo-800 to-violet-800"></div>

    <!-- Main Navbar -->
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center h-20">
            <!-- Logo Section -->
            <div class="relative group">
                <div
                    class="absolute -inset-2 rounded-lg bg-gradient-to-r from-violet-800/20 to-indigo-800/20 blur-lg opacity-0 group-hover:opacity-100 transition-all duration-500">
                </div>
                <a href="/" class="relative flex items-center">
                    <img src="https://mytelth.com/assets/telth_logo_white.png" alt="telth" class="w-6 h-6 mr-2">
                    <span class="text-2xl font-bold text-violet-900">
                        {{ config('app.name', 'Telth.care') }}
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-violet-700 hover:text-indigo-800 hover:bg-gray-100 transition-all relative group {{ request()->is('/') ? 'text-indigo-800 bg-gray-100' : '' }}">
                    <span class="relative z-10">Home</span>
                    <div
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-violet-800/10 to-indigo-800/10 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    </div>
                </a>
                <a href="/solutions"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-violet-700 hover:text-indigo-800 hover:bg-gray-100 transition-all relative group {{ request()->is('solutions*') ? 'text-indigo-800 bg-gray-100' : '' }}">
                    <span class="relative z-10">Solutions</span>
                    <div
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-violet-800/10 to-indigo-800/10 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    </div>
                </a>
                <a href="/care"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-violet-700 hover:text-indigo-800 hover:bg-gray-100 transition-all relative group {{ request()->is('care*') ? 'text-indigo-800 bg-gray-100' : '' }}">
                    <span class="relative z-10">Healthcare Services</span>
                    <div
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-violet-800/10 to-indigo-800/10 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    </div>
                </a>
                <a href="/contact"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-violet-700 hover:text-indigo-800 hover:bg-gray-100 transition-all relative group {{ request()->is('contact') ? 'text-indigo-800 bg-gray-100' : '' }}">
                    <span class="relative z-10">Contact</span>
                    <div
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-violet-800/10 to-indigo-800/10 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    </div>
                </a>

                <!-- Menu Button -->
                <button type="button" x-data @click="$dispatch('toggle-menu')" class="relative group ml-4">
                    <div
                        class="absolute -inset-2 rounded-lg bg-gradient-to-r from-violet-800 to-indigo-800 blur opacity-0 group-hover:opacity-30 transition-all duration-500">
                    </div>
                    <span
                        class="relative px-5 py-2.5 rounded-lg bg-gradient-to-r from-violet-800 to-indigo-800 text-white text-sm font-medium flex items-center gap-2 group-hover:from-violet-700 group-hover:to-indigo-700 transition-all duration-300">
                        <span>Menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button type="button" x-data @click="$dispatch('toggle-menu')" class="md:hidden relative group">
                <div
                    class="absolute -inset-2 rounded-lg bg-gradient-to-r from-violet-800 to-indigo-800 blur opacity-0 group-hover:opacity-30 transition-all duration-500">
                </div>
                <span class="relative p-2 rounded-lg text-violet-700 hover:text-violet-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</nav>
<div class="h-20 fixed z-20 w-full bg-gradient-to-b from-gray-100 to-transparent"></div>
<div class="h-20"></div>


<!-- Full Screen Menu Overlay -->
<div x-data="{ isOpen: false }" x-show="isOpen" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" @toggle-menu.window="isOpen = !isOpen" @keydown.escape.window="isOpen = false"
    class="fixed inset-0 z-50 overflow-y-auto overflow-x-hidden" style="display: none;">

    <!-- Backdrop -->
    <div class="fixed inset-0 bg-gradient-to-br from-white via-gray-50 to-white backdrop-blur-xl">
    </div>

    <!-- Menu Content -->
    <div class="relative min-h-screen">
        <div class="container mx-auto px-6 py-12">
            <!-- Header -->
            <div class="flex justify-between items-center mb-12">
                <div
                    class="text-3xl font-bold bg-gradient-to-r from-violet-900 to-indigo-900 bg-clip-text text-transparent">
                    <img src="https://mytelth.com/assets/telth_logo_white.png" alt="telth" class="w-10 h-10 mb-2">
                    Telth.care
                </div>
                <button type="button" @click="isOpen = false"
                    class="group p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-violet-800 group-hover:text-violet-900 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Healthcare Solutions -->
                <div class="space-y-8">
                    <!-- Core Solutions -->
                    <div
                        class="p-6 bg-gray-100 rounded-2xl backdrop-blur-sm border border-gray-100 hover:bg-violet-100 transition-colors group">
                        <h3 class="text-lg font-semibold text-violet-900 mb-6">Healthcare Solutions</h3>
                        <div class="space-y-4">
                            <a href="/solutions/care2home"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Care2Home</span>
                            </a>
                            <a href="/solutions/health-card"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Health Card</span>
                            </a>
                            <a href="/solutions/smart-hubs"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Smart Hubs</span>
                            </a>
                        </div>
                    </div>

                    <!-- Diagnostics -->
                    <div
                        class="p-6 bg-gray-100 rounded-2xl backdrop-blur-sm border border-gray-100 hover:bg-violet-100 transition-colors group">
                        <h3 class="text-lg font-semibold text-violet-900 mb-6">Smart Diagnostics</h3>
                        <div class="space-y-4">
                            <a href="/solutions/diagnostics/dia-lab"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Dia Lab</span>
                            </a>
                            <a href="/solutions/diagnostics/poct"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>POCT</span>
                            </a>
                            <a href="/solutions/diagnostics/iomt"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>IoMT</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Healthcare Services -->
                <div class="space-y-8">
                    <!-- Services -->
                    <div
                        class="p-6 bg-gray-100 rounded-2xl backdrop-blur-sm border border-gray-100 hover:bg-violet-100 transition-colors group">
                        <h3 class="text-lg font-semibold text-violet-900 mb-6">Healthcare Services</h3>
                        <div class="space-y-4">
                            <a href="/care/services"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Services</span>
                            </a>
                            <a href="/care/plans"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Care Plans</span>
                            </a>
                            <a href="/care/resources"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Resources</span>
                            </a>
                        </div>
                    </div>

                    <!-- Digital Health -->
                    <div
                        class="p-6 bg-gray-100 rounded-2xl backdrop-blur-sm border border-gray-100 hover:bg-violet-100 transition-colors group">
                        <h3 class="text-lg font-semibold text-violet-900 mb-6">Digital Health</h3>
                        <div class="space-y-4">
                            <a href="/digital-health/patient"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Patient Portal</span>
                            </a>
                            <a href="/digital-health/provider"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Provider Portal</span>
                            </a>
                            <a href="/digital-health/telemedicine"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Telemedicine</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Research & Support -->
                <div class="space-y-8">
                    <!-- Research & Innovation -->
                    <div
                        class="p-6 bg-gray-100 rounded-2xl backdrop-blur-sm border border-gray-100 hover:bg-violet-100 transition-colors group">
                        <h3 class="text-lg font-semibold text-violet-900 mb-6">Research & Innovation</h3>
                        <div class="space-y-4">
                            <a href="/research/clinical"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Clinical Research</span>
                            </a>
                            <a href="/research/technology"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Technology Research</span>
                            </a>
                            <a href="/research/studies"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Studies</span>
                            </a>
                        </div>
                    </div>

                    <!-- Support -->
                    <div
                        class="p-6 bg-gray-100 rounded-2xl backdrop-blur-sm border border-gray-100 hover:bg-violet-100 transition-colors group">
                        <h3 class="text-lg font-semibold text-violet-900 mb-6">Support & Resources</h3>
                        <div class="space-y-4">
                            <a href="/support/technical"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Technical Support</span>
                            </a>
                            <a href="/support/customer"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Customer Support</span>
                            </a>
                            <a href="/support/resources"
                                class="flex items-center gap-3 text-violet-700 hover:text-violet-900 hover:underline group-hover:translate-x-2 transition-all duration-300">
                                <span
                                    class="w-2 h-0.5 bg-violet-800 group-hover:w-3 transition-all duration-300"></span>
                                <span>Resources Hub</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="mt-12 pt-12 border-t border-gray-200">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                    <a href="/mobile-healthcare"
                        class="text-violet-700 hover:text-violet-900 text-sm transition-colors">
                        Mobile Healthcare
                    </a>
                    <a href="/financial" class="text-violet-700 hover:text-violet-900 text-sm transition-colors">
                        Financial Services
                    </a>
                    <a href="/infrastructure" class="text-violet-700 hover:text-violet-900 text-sm transition-colors">
                        Infrastructure
                    </a>
                    <a href="/education" class="text-violet-700 hover:text-violet-900 text-sm transition-colors">
                        Education & Training
                    </a>
                    <a href="/locations" class="text-violet-700 hover:text-violet-900 text-sm transition-colors">
                        Locations
                    </a>
                    <a href="/contact" class="text-violet-700 hover:text-violet-900 text-sm transition-colors">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Get Started -->
            <div class="mt-12 flex justify-center">
                <a href="/get-started"
                    class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-violet-800 to-indigo-800 hover:from-violet-700 hover:to-indigo-700 text-white rounded-xl text-sm font-medium transition-all duration-200 group">
                    <span>Get Started</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
