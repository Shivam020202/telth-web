@extends('layouts.app')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" /> --}}
@section('title', 'Home')
@push('styles')
    <style>
        .hero-swiper .swiper-pagination-bullet {
            @apply w-3 h-3 bg-white/30 transition-all;
        }

        .hero-swiper .swiper-pagination-bullet-active {
            @apply w-8 bg-primary-500 rounded-full;
        }
    </style>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .partner-carousel .swiper-slide {
            width: auto !important;
            margin-right: 3rem !important;
        }
    </style>
    <style>
        @keyframes flow {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-flow {
            animation: flow 30s linear infinite;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
@endpush

@section('content')

    {{-- Slider/hero --}}
    <section class="relative w-full h-[70vh] md:h-[80vh] overflow-hidden bg-gray-900">
        <!-- Slider Container -->
        <div class="swiper-container hero-swiper h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1: Healthcare Professionals - Distinctive Medical Theme -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1502905704466-2690947baeee?q=80&w=2938&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Healthcare Professionals" class="w-full h-full object-cover object-center" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/70 to-transparent"></div>
                    </div>

                    <div class="relative z-10 container mx-auto h-full flex items-center px-4 md:px-8">
                        <div class="max-w-xl md:max-w-2xl text-white">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                                <span class="text-sm md:text-base font-semibold text-blue-300 uppercase tracking-wider">
                                    For Healthcare Professionals
                                </span>
                            </div>

                            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                                Your Practice, <span class="text-blue-400">Your Rules.</span> More Care, More Rewards.
                            </h1>
                            <p class="text-base md:text-lg mb-8 opacity-90 max-w-md">
                                Take control of your career with flexible scheduling, smart patient management, and endless
                                earning potential.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/contact"
                                    class="bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-lg font-semibold transition-colors duration-300 text-center">
                                    Join Our Network
                                </a>
                                <a href="/learn-more"
                                    class="bg-transparent hover:bg-white/10 px-6 py-3 rounded-lg font-semibold transition-colors duration-300 border border-white/30 text-center">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Visual indicator for Healthcare slide -->
                    <div class="absolute bottom-8 left-8 z-20 hidden md:flex items-center">
                        <div class="flex space-x-2 items-center bg-blue-900/50 backdrop-blur-sm px-4 py-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                            <span class="text-sm text-white">Healthcare Professionals</span>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Corporates - Business Theme -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1578351709253-928714cb0595?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Corporate Solutions" class="w-full h-full object-cover object-center" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 via-purple-800/70 to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 container mx-auto h-full flex items-center px-4 md:px-8">
                        <div class="max-w-xl md:max-w-2xl text-white">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <span class="text-sm md:text-base font-semibold text-purple-300 uppercase tracking-wider">
                                    For Corporates
                                </span>
                            </div>

                            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                                A Healthier Workforce. <span class="text-purple-400">A Stronger Business.</span>
                            </h1>
                            <p class="text-base md:text-lg mb-8 opacity-90 max-w-md">
                                Boost productivity and employee satisfaction with exclusive wellness benefits and healthcare
                                solutions tailored for your team.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/contact"
                                    class="bg-purple-500 hover:bg-purple-600 px-6 py-3 rounded-lg font-semibold transition-colors duration-300 text-center">
                                    Schedule a Demo
                                </a>
                                <a href="/corporate-plans"
                                    class="bg-transparent hover:bg-white/10 px-6 py-3 rounded-lg font-semibold transition-colors duration-300 border border-white/30 text-center">
                                    View Plans
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Visual indicator for Corporate slide -->
                    <div class="absolute bottom-8 left-8 z-20 hidden md:flex items-center">
                        <div class="flex space-x-2 items-center bg-purple-900/50 backdrop-blur-sm px-4 py-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm text-white">Corporate Solutions</span>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Partner with Us - Partnership Theme -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Partnership Opportunities" class="w-full h-full object-cover object-center" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-r from-green-900/90 via-green-800/70 to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 container mx-auto h-full flex items-center px-4 md:px-8">
                        <div class="max-w-xl md:max-w-2xl text-white">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <span class="text-sm md:text-base font-semibold text-green-300 uppercase tracking-wider">
                                    Partner with Us
                                </span>
                            </div>

                            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                                Revolutionizing Healthcare—<span class="text-green-400">together.</span>
                            </h1>
                            <p class="text-base md:text-lg mb-8 opacity-90 max-w-md">
                                Join hands with Telth to create smarter, faster, and more connected healthcare ecosystems.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/contact"
                                    class="bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg font-semibold transition-colors duration-300 text-center">
                                    Become a Partner
                                </a>
                                <a href="/partnership-benefits"
                                    class="bg-transparent hover:bg-white/10 px-6 py-3 rounded-lg font-semibold transition-colors duration-300 border border-white/30 text-center">
                                    Explore Benefits
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Visual indicator for Partnership slide -->
                    <div class="absolute bottom-8 left-8 z-20 hidden md:flex items-center">
                        <div class="flex space-x-2 items-center bg-green-900/50 backdrop-blur-sm px-4 py-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                            <span class="text-sm text-white">Partnership Opportunities</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Improved Slider Controls -->
            <div class="swiper-pagination !bottom-6 md:!bottom-8"></div>

            <!-- Custom navigation buttons without default swiper arrows -->
            <button
                class="swiper-prev-custom !hidden md:!flex !w-8 !h-8 !bg-white/10 !backdrop-blur-sm !rounded-full !text-white hover:!bg-white/20 transition-all absolute left-4 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button
                class="swiper-next-custom !hidden md:!flex !w-8 !h-8 !bg-white/10 !backdrop-blur-sm !rounded-full !text-white hover:!bg-white/20 transition-all absolute right-4 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <!-- Organization Identity Marker - Enhanced with backdrop blur -->
        <div
            class="absolute bottom-6 right-6 md:bottom-8 md:right-8 z-20 flex items-center gap-2 bg-black/30 backdrop-blur-sm py-2 px-3 rounded-full">
            <img src="https://mytelth.com/assets/telth_logo_white.png" alt="Telth Logo" class="w-6 h-6 md:w-8 md:h-8"
                loading="lazy">
            <span class="text-white font-semibold text-xs md:text-sm">Telth</span>
        </div>
    </section>

    {{-- about --}}
    <section class="relative bg-white py-16 lg:py-20">
        <div class="container mx-auto px-4">
            <!-- Main Content Container -->
            <div class="flex flex-col lg:flex-row gap-8 xl:gap-12 items-start">
                <!-- Image Section (Priority Space) -->
                <div
                    class="lg:w-[45%] xl:w-[40%] flex-shrink-0 relative group rounded-2xl overflow-hidden shadow-xl h-80 lg:h-[500px]">
                    <img src="https://images.unsplash.com/photo-1449157291145-7efd050a4d0e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Telth Healthcare Solutions"
                        class="w-full h-full object-cover object-center transform transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <span class="block text-sm font-light">Since 2012</span>
                        <span class="block text-2xl font-bold">Trusted Healthcare Partner</span>
                    </div>
                </div>

                <!-- Content + Stats Container -->
                <div class="flex-1 flex flex-col gap-8 xl:gap-12">
                    <!-- Content Section (Takes Available Space) -->
                    <div class="flex flex-col gap-8">
                        <div class="mb-4">
                            <span class="text-indigo-800 font-semibold text-sm tracking-wide uppercase">Innovating
                                Healthcare</span>
                            <h2 class="text-4xl font-bold text-gray-900 mt-2 leading-tight">
                                Comprehensive Medical Solutions
                            </h2>
                        </div>

                        <div class="flex flex-col gap-6" x-data="{ activeTab: 'services' }">
                            <!-- Modern Tab Navigation -->
                            <div class="flex flex-wrap gap-4 border-b border-gray-100">
                                <button @click="activeTab = 'services'"
                                    :class="activeTab === 'services' ? 'text-violet-800 border-violet-800' :
                                        'text-gray-500 hover:text-gray-700 border-transparent'"
                                    class="pb-3 px-1 border-b-2 font-medium transition-all duration-300 text-sm uppercase tracking-wide">
                                    Our Services
                                </button>
                                <button @click="activeTab = 'solutions'"
                                    :class="activeTab === 'solutions' ? 'text-violet-800 border-violet-800' :
                                        'text-gray-500 hover:text-gray-700 border-transparent'"
                                    class="pb-3 px-1 border-b-2 font-medium transition-all duration-300 text-sm uppercase tracking-wide">
                                    Solutions
                                </button>
                                <button @click="activeTab = 'devices'"
                                    :class="activeTab === 'devices' ? 'text-violet-800 border-violet-800' :
                                        'text-gray-500 hover:text-gray-700 border-transparent'"
                                    class="pb-3 px-1 border-b-2 font-medium transition-all duration-300 text-sm uppercase tracking-wide">
                                    Our Tech
                                </button>
                                <!-- Add other tab buttons -->
                            </div>

                            <!-- Tab Content -->
                            <div class="flex flex-col gap-6">
                                <div x-show="activeTab === 'solutions'" x-cloak>
                                    <div class="flex flex-col md:flex-row gap-6">
                                        <div
                                            class="flex-1 p-6 bg-gray-50 rounded-xl hover:bg-white transition-all duration-300 border border-gray-100 hover:border-teal-100">
                                            <div
                                                class="w-12 h-12 bg-indigo-600/10 rounded-lg mb-4 flex items-center justify-center">
                                                <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h3 class="text-lg font-semibold mb-2">Clinical Solutions</h3>
                                            <p class="text-gray-600 text-sm leading-relaxed">
                                                Comprehensive patient care through our network of certified medical
                                                professionals.
                                            </p>
                                        </div>
                                        <!-- Add more service cards -->
                                    </div>
                                </div>
                                <div x-show="activeTab === 'services'" x-cloak>
                                    <div class="flex flex-col md:flex-row gap-6">
                                        <div
                                            class="flex-1 p-6 bg-gray-50 rounded-xl hover:bg-white transition-all duration-300 border border-gray-100 hover:border-teal-100">
                                            <div
                                                class="w-12 h-12 bg-indigo-600/10 rounded-lg mb-4 flex items-center justify-center">
                                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h3 class="text-lg font-semibold mb-2">Clinical Services</h3>
                                            <p class="text-gray-600 text-sm leading-relaxed">
                                                Comprehensive patient care through our network of certified medical
                                                professionals.
                                            </p>
                                        </div>
                                        <!-- Add more service cards -->
                                    </div>
                                </div>
                                <div x-show="activeTab === 'devices'" x-cloak>
                                    <div class="flex flex-col md:flex-row gap-6">
                                        <div
                                            class="flex-1 p-6 bg-gray-50 rounded-xl hover:bg-white transition-all duration-300 border border-gray-100 hover:border-teal-100">
                                            <div
                                                class="w-12 h-12 bg-purple-600/10 rounded-lg mb-4 flex items-center justify-center">
                                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h3 class="text-lg font-semibold mb-2">Clinical Devices</h3>
                                            <p class="text-gray-600 text-sm leading-relaxed">
                                                Comprehensive patient care through our network of certified medical
                                                professionals.
                                            </p>
                                        </div>
                                        <!-- Add more service cards -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Partner Carousel -->
            {{-- <div class="mt-16 pt-12 border-t border-gray-100 overflow-hidden">
                <div class="swiper-container partner-carousel">
                    <div class="swiper-wrapper flex items-center">
                        <div class="swiper-slide w-auto">
                            <img src="https://cart.hostinger.com/assets/hostinger-black.svg" alt="FDA"
                                class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                        </div>
                        <div class="swiper-slide w-auto">
                            <img src="https://cart.hostinger.com/assets/hostinger-black.svg" alt="FDA"
                                class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                        </div>
                        <div class="swiper-slide w-auto">
                            <img src="https://cart.hostinger.com/assets/hostinger-black.svg" alt="FDA"
                                class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                        </div>
                        <!-- Add more partners -->
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- Care Manager Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-gray-100 to-gray-50">
        <div class="relative py-20 md:py-24 bg-cover bg-center"
            style="background-image: url(assets/images/home/elder-care.webp);">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h2 class="text-4xl font-bold text-white mb-4 tracking-tight drop-shadow-lg">
                    <span class="block">Flexible Care Manager (CM) &</span>
                    <span class="block">Collaborative Care Manager (CCM)</span>
                </h2>
                <h3 class="text-xl font-normal text-gray-300 mb-8">Empowering Independent Healthcare Professionals</h3>
                <p class="text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">
                    Telth's models offer freelance healthcare workers the opportunity to build their network, earn more,
                    and work flexibly.
                </p>
            </div>
        </div>

        <div class="py-16">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="group relative bg-white rounded-3xl border border-black/10 overflow-hidden
                            transition-all duration-500 transform hover:scale-[1.02]
                            hover:shadow-blue-500/20">
                        <div class="p-6 space-y-4">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-500
                                    flex items-center justify-center shadow-md transition-all duration-300
                                    group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock-check-filled text-white">
                                    <path
                                        d="M12 2c5.523 0 10 4.477 10 10a9.97 9.97 0 0 1-2.72 7.18L12 15.815l-7.28 3.365A9.969 9.969 0 0 1 2 12c0-5.523 4.477-10 10-10Z" />
                                    <path d="m15.1 8.3-2.9 2.9-1.5-1.5" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-semibold text-gray-900 text-center tracking-tight">One-Hour
                                Consultation Cycle</h4>
                            <p class="text-gray-700 text-lg text-center leading-relaxed">
                                Complete patient consultations, prescriptions, and follow-ups efficiently.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-100 opacity-0
                                group-hover:opacity-50 transition-opacity duration-500 rounded-b-3xl">
                            {{-- <div
                                class="absolute bottom-4 left-4 text-white text-lg font-medium opacity-0
                                    group-hover:opacity-100 transition-opacity duration-500">
                                Learn More
                            </div> --}}
                        </div>
                    </div>

                    <div
                        class="group relative bg-white rounded-3xl border border-black/10 overflow-hidden
                            transition-all duration-500 transform hover:scale-[1.02]
                            hover:shadow-blue-500/20">
                        <div class="p-6 space-y-4">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-500
                                    flex items-center justify-center shadow-md transition-all duration-300
                                    group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-network text-white">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M2 12h2" />
                                    <path d="M20 12h2" />
                                    <path d="M12 2v2" />
                                    <path d="M12 20v2" />
                                    <path d="M18.364 5.636 16.95 7.05" />
                                    <path d="M7.05 16.95 5.636 18.364" />
                                    <path d="M18.364 18.364 16.95 16.95" />
                                    <path d="M7.05 7.05 5.636 5.636" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-semibold text-gray-900 text-center tracking-tight">Build Your Network
                            </h4>
                            <p class="text-gray-700 text-lg text-center leading-relaxed">
                                Connect with doctors, pharmacies, and hospitals seamlessly.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-100 opacity-0
                                group-hover:opacity-50 transition-opacity duration-500 rounded-b-3xl">
                            {{-- <div
                                class="absolute bottom-4 left-4 text-white text-lg font-medium opacity-0
                                    group-hover:opacity-100 transition-opacity duration-500">
                                Learn More
                            </div> --}}
                        </div>
                    </div>

                    <div
                        class="group relative bg-white rounded-3xl border border-black/10 overflow-hidden
                            transition-all duration-500 transform hover:scale-[1.02]
                            hover:shadow-blue-500/20">
                        <div class="p-6 space-y-4">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-500
                                    flex items-center justify-center shadow-md transition-all duration-300
                                    group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-piggy-bank text-white">
                                    <path
                                        d="M20 10H18V6c0-1.7-1.3-3-3-3H9c-1.7 0-3 1.3-3 3v4H4c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2Z" />
                                    <path d="M12 15c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3Z" />
                                    <path d="M9 17v-4" />
                                    <path d="M15 17v-4" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-semibold text-gray-900 text-center tracking-tight">Earn as a
                                Solopreneur</h4>
                            <p class="text-gray-700 text-lg text-center leading-relaxed">
                                Manage patient care and generate multiple revenue streams.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-100 opacity-0
                                group-hover:opacity-50 transition-opacity duration-500 rounded-b-3xl">
                            {{-- <div
                                class="absolute bottom-4 left-4 text-white text-lg font-medium opacity-0
                                    group-hover:opacity-100 transition-opacity duration-500">
                                Learn More
                            </div> --}}
                        </div>
                    </div>

                    <div
                        class="group relative bg-white rounded-3xl border border-black/10 overflow-hidden
                            transition-all duration-500 transform hover:scale-[1.02]
                            hover:shadow-blue-500/20">
                        <div class="p-6 space-y-4">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-500
                                    flex items-center justify-center shadow-md transition-all duration-300
                                    group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-share-2 text-white">
                                    <path d="M10 20v-7" />
                                    <path d="M10 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4" />
                                    <path d="M18 7a3 3 0 0 0-3-3h-4l5-5" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-semibold text-gray-900 text-center tracking-tight">Smart Referral
                                System</h4>
                            <p class="text-gray-700 text-lg text-center leading-relaxed">
                                Direct patients to trusted partners and benefit financially.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-100 opacity-0
                                group-hover:opacity-50 transition-opacity duration-500 rounded-b-3xl">
                            {{-- <div
                                class="absolute bottom-4 left-4 text-white text-lg font-medium opacity-0
                                    group-hover:opacity-100 transition-opacity duration-500">
                                Learn More
                            </div> --}}
                        </div>
                    </div>

                    <div
                        class="group relative bg-white rounded-3xl border border-black/10 overflow-hidden
                            transition-all duration-500 transform hover:scale-[1.02]
                            hover:shadow-blue-500/20">
                        <div class="p-6 space-y-4">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-500
                                    flex items-center justify-center shadow-md transition-all duration-300
                                    group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-brain-circuit text-white">
                                    <path d="M18.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M12 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M5.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M7.5 8h1" />
                                    <path d="M10.5 8h3" />
                                    <path d="M13.5 8h1" />
                                    <path d="M16.5 8h1" />
                                    <path d="M12 10v1" />
                                    <path d="M12 14v1" />
                                    <path d="M12 17v1" />
                                    <path d="M9 16h6" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-semibold text-gray-900 text-center tracking-tight">AI-Powered Support
                            </h4>
                            <p class="text-gray-700 text-lg text-center leading-relaxed">
                                Enhance decision-making and efficiency with data-driven tools.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-100 opacity-0
                                group-hover:opacity-50 transition-opacity duration-500 rounded-b-3xl">
                            {{-- <div
                                class="absolute bottom-4 left-4 text-white text-lg font-medium opacity-0
                                    group-hover:opacity-100 transition-opacity duration-500">
                                Learn More
                            </div> --}}
                        </div>
                    </div>

                    <div
                        class="group relative bg-white rounded-3xl border border-black/10 overflow-hidden
                            transition-all duration-500 transform hover:scale-[1.02]
                            hover:shadow-blue-500/20">
                        <div class="p-6 space-y-4">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-500
                                    flex items-center justify-center shadow-md transition-all duration-300
                                    group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-monitor-check text-white">
                                    <path d="M4 8V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v2" />
                                    <path d="M2 17v-4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v4c0 1.1-.9 2-2 2H4a2 0 0 1-2-2Z" />
                                    <path d="M12 17v4" />
                                    <path d="m15 21-3-3-3 3" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-semibold text-gray-900 text-center tracking-tight">Clear & Simple
                                Interface</h4>
                            <p class="text-gray-700 text-lg text-center leading-relaxed">
                                Easy-to-use platform for seamless patient interaction.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-100 opacity-0
                                group-hover:opacity-50 transition-opacity duration-500 rounded-b-3xl">
                            {{-- <div
                                class="absolute bottom-4 left-4 text-white text-lg font-medium opacity-0
                                    group-hover:opacity-100 transition-opacity duration-500">
                                Learn More
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="py-20 bg-gradient-to-br from-blue-600 to-purple-600 rounded-t-3xl">
            <div class="container mx-auto px-6 text-center">
                <h3 class="text-3xl font-bold text-white mb-8 tracking-tight drop-shadow-lg">
                    Ready to transform your healthcare career?
                </h3>
                <a href="#"
                    class="inline-flex items-center justify-center px-10 py-4 bg-white text-blue-700 font-medium rounded-full
                          hover:bg-blue-100 transition-colors duration-300 text-lg shadow-xl hover:shadow-2xl
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-arrow-right-circle mr-3">
                        <circle cx="12" cy="12" r="10" />
                        <path d="m12 16 4-4-4-4" />
                        <path d="M8 12h8" />
                    </svg>
                    Join Our Network
                </a>
            </div>
        </div> --}}
    </section>

    <!-- Turnkey Solutions Section -->
    <section class="relative overflow-hidden py-20 md:py-24">
        <div class="relative bg-cover bg-center py-20"
            style="background-image: url('https://images.unsplash.com/photo-1510017803434-a899398421b3?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="absolute inset-0 bg-blue-900 opacity-70"></div>
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight text-white">
                    Smart Solutions for Healthcare
                </h2>
                <h3 class="text-xl md:text-2xl font-normal mb-6 text-gray-300 max-w-3xl mx-auto">
                    Empowering Healthcare with Innovative Technology
                </h3>
            </div>
        </div>

        <div class="py-16">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 md:gap-10">
                    <div
                        class="group bg-white  transition-all duration-300
                                          hover:scale-[1.01] border border-gray-200">
                        <div class="p-6 space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-100 text-blue-600
                                                 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clinic">
                                    <path d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2z" />
                                    <path d="M12 10v4" />
                                    <path d="M10 12h4" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-900 text-left
                                                 tracking-tight">
                                Smart Clinics & Kiosks
                            </h3>
                            <p class="text-gray-600 text-base text-left leading-relaxed">
                                Modular clinics in public spaces to increase hospital reach.
                            </p>
                        </div>
                    </div>

                    <div
                        class="group bg-white  transition-all duration-300
                                          hover:scale-[1.01] border border-gray-200">
                        <div class="p-6 space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-100 text-blue-600
                                                 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain-circuit">
                                    <path d="M18.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M12 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M5.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M7.5 8h1" />
                                    <path d="M10.5 8h3" />
                                    <path d="M13.5 8h1" />
                                    <path d="M16.5 8h1" />
                                    <path d="M12 10v1" />
                                    <path d="M12 14v1" />
                                    <path d="M12 17v1" />
                                    <path d="M9 16h6" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-900 text-left
                                                 tracking-tight">
                                AI-Powered Smart Hubs
                            </h3>
                            <p class="text-gray-600 text-base text-left leading-relaxed">
                                Upgrade hospitals with real-time data management and analytics.
                            </p>
                        </div>
                    </div>

                    <div
                        class="group bg-white  transition-all duration-300
                                          hover:scale-[1.01] border border-gray-200">
                        <div class="p-6 space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-100 text-blue-600
                                                 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thermometer">
                                    <path d="M14 14.762V3.5a2.5 2.5 0 0 0-5 0v11.262a4 4 0 1 0 5 0z" />
                                    <path d="M12 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-900 text-left
                                                 tracking-tight">
                                Advanced Medical Devices
                            </h3>
                            <p class="text-gray-600 text-base text-left leading-relaxed">
                                Portable and large diagnostic tools for superior care.
                            </p>
                        </div>
                    </div>

                    <div
                        class="group bg-white  transition-all duration-300
                                          hover:scale-[1.01] border border-gray-200">
                        <div class="p-6 space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-100 text-blue-600
                                                 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database-zap">
                                    <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z" />
                                    <path d="M12 12v6" />
                                    <path d="m16 6-4 4 4 4" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-900 text-left
                                                 tracking-tight">
                                Seamless Data Integration
                            </h3>
                            <p class="text-gray-600 text-base text-left leading-relaxed">
                                Secure, AI-backed patient data management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-10 container mx-auto px-6 text-center">
            <button
                class="relative px-6 py-3 bg-gray-900 text-white font-semibold uppercase tracking-wider text-sm 
               border-2 border-gray-900 
               group
               transform transition-all duration-300 
               hover:bg-transparent hover:text-gray-900
               focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2
               active:scale-95
               overflow-hidden">
                <span class="relative z-10 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    Know More
                </span>
            </button>

        </div>
    </section>

    <!-- Health & Wealth Card Section -->
    <section class="relative py-20 bg-cover bg-center overflow-hidden"
        style="background-image: url('/api/placeholder/1600/800');">
        <!-- Overlay gradient for text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/80 to-blue-900/90"></div>

        <div class="container mx-auto px-6 relative">
            <!-- Section header -->
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Health & Wealth Card</h2>
                <h3 class="text-xl text-blue-200 mb-6">Wellness & Financial Security in One Card</h3>
                <p class="text-white/90 text-lg">
                    The <strong>Health & Wealth Card</strong> combines <strong>healthcare benefits with financial
                        savings</strong>, offering a unique wellness solution for individuals and corporate partners.
                </p>
            </div>

            <!-- Card image and benefits layout -->
            <div class="relative">
                <!-- Desktop layout with points around card -->
                <div class="hidden lg:block">
                    <!-- Center card image -->
                    <div class="absolute left-1/2 top-1/3 transform -translate-x-1/2 -translate-y-1/2 z-10">
                        <div class="relative">
                            <!-- Glowing effect behind card -->
                            <div class="absolute -inset-6 bg-blue-400/30 blur-xl rounded-3xl"></div>
                            <!-- Card image -->
                            <img src="assets/images/home/card.png" alt="Health & Wealth Card"
                                class="relative w-96 rounded-xl -mt-12 h-auto object-contain drop-shadow-2xl">
                        </div>
                    </div>

                    <!-- Benefits arranged around center -->
                    <div class="grid grid-cols-2 gap-x-[500px] gap-y-8">
                        <!-- Left column benefits -->
                        <div class="space-y-10">
                            <!-- Benefit 1 -->
                            <div class="benefit-card left-align">
                                <div
                                    class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 max-w-sm ml-auto shadow-lg">
                                    <h4 class="text-lg font-semibold text-white mb-2">For Individuals</h4>
                                    <p class="text-blue-100">Access exclusive health benefits, discounts, and wellness
                                        services.</p>
                                </div>
                                <!-- Connector line to center -->
                                <div
                                    class="absolute top-1/2 right-0 w-32 h-0.5 bg-gradient-to-r from-blue-400 to-transparent transform translate-x-full">
                                </div>
                            </div>

                            <!-- Benefit 3 -->
                            <div class="benefit-card left-align">
                                <div
                                    class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 max-w-sm ml-auto shadow-lg">
                                    <h4 class="text-lg font-semibold text-white mb-2">All-in-One Solution</h4>
                                    <p class="text-blue-100">A single card for healthcare access and financial perks.</p>
                                </div>
                                <!-- Connector line to center -->
                                <div
                                    class="absolute top-1/2 right-0 w-32 h-0.5 bg-gradient-to-r from-blue-400 to-transparent transform translate-x-full">
                                </div>
                            </div>
                        </div>

                        <!-- Right column benefits -->
                        <div class="space-y-10">
                            <!-- Benefit 2 -->
                            <div class="benefit-card right-align">
                                <div
                                    class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-r-4 border-blue-400 hover:bg-white/20 transition-all duration-300 max-w-sm shadow-lg">
                                    <h4 class="text-lg font-semibold text-white mb-2">For Corporates</h4>
                                    <p class="text-blue-100">Improve employee well-being with customizable health programs.
                                    </p>
                                </div>
                                <!-- Connector line to center -->
                                <div
                                    class="absolute top-1/2 left-0 w-32 h-0.5 bg-gradient-to-l from-blue-400 to-transparent transform -translate-x-full">
                                </div>
                            </div>

                            <!-- Benefit 4 -->
                            <div class="benefit-card right-align">
                                <div
                                    class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-r-4 border-blue-400 hover:bg-white/20 transition-all duration-300 max-w-sm shadow-lg">
                                    <h4 class="text-lg font-semibold text-white mb-2">Strategic Health & Wealth
                                        Partnerships</h4>
                                    <p class="text-blue-100">Expanding benefits across various sectors.</p>
                                </div>
                                <!-- Connector line to center -->
                                <div
                                    class="absolute top-1/2 left-0 w-32 h-0.5 bg-gradient-to-l from-blue-400 to-transparent transform -translate-x-full">
                                </div>
                            </div>
                        </div>

                        <!-- Bottom benefit -->
                        <div class="col-span-2 mx-auto mt-8">
                            <div
                                class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-b-4 border-blue-400 hover:bg-white/20 transition-all duration-300 max-w-sm shadow-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">Simplified Healthcare Access</h4>
                                <p class="text-blue-100">One card for appointments, prescriptions, and wellness rewards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile/tablet layout (stacked) -->
                <div class="lg:hidden">
                    <!-- Card image at top -->
                    <div class="mb-10 text-center">
                        <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Health & Wealth Card" class="w-64 h-auto mx-auto object-contain drop-shadow-2xl">
                    </div>

                    <!-- Benefits stacked -->
                    <div class="space-y-6">
                        <!-- Benefit 1 -->
                        <div
                            class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 shadow-lg">
                            <h4 class="text-lg font-semibold text-white mb-2">For Individuals</h4>
                            <p class="text-blue-100">Access exclusive health benefits, discounts, and wellness services.
                            </p>
                        </div>

                        <!-- Benefit 2 -->
                        <div
                            class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 shadow-lg">
                            <h4 class="text-lg font-semibold text-white mb-2">For Corporates</h4>
                            <p class="text-blue-100">Improve employee well-being with customizable health programs.</p>
                        </div>

                        <!-- Benefit 3 -->
                        <div
                            class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 shadow-lg">
                            <h4 class="text-lg font-semibold text-white mb-2">All-in-One Solution</h4>
                            <p class="text-blue-100">A single card for healthcare access and financial perks.</p>
                        </div>

                        <!-- Benefit 4 -->
                        <div
                            class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 shadow-lg">
                            <h4 class="text-lg font-semibold text-white mb-2">Strategic Health & Wealth Partnerships</h4>
                            <p class="text-blue-100">Expanding benefits across various sectors.</p>
                        </div>

                        <!-- Benefit 5 -->
                        <div
                            class="p-6 bg-white/10 backdrop-blur-md rounded-xl border-l-4 border-blue-400 hover:bg-white/20 transition-all duration-300 shadow-lg">
                            <h4 class="text-lg font-semibold text-white mb-2">Simplified Healthcare Access</h4>
                            <p class="text-blue-100">One card for appointments, prescriptions, and wellness rewards.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA button -->
            <div class="mt-16 text-center">
                <a href="#"
                    class="inline-flex items-center px-8 py-4 bg-blue-500 text-white font-medium  hover:bg-blue-600 transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Get Your Card Today
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Patient-Centric Care Section -->
    <section class="bg-gray-50 py-16">
        <!-- Section header -->
        <div class="container mx-auto px-4 mb-12">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Patient-Centric Care</h2>
                <h3 class="text-xl text-blue-700 mb-4">Seamless, Data-Driven Healthcare Solutions</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    At Telth, we prioritize <strong>convenience, accessibility, and high-quality care</strong>. Our
                    AI-powered platform ensures <strong>fast, personalized, and efficient healthcare services</strong>.
                </p>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="container mx-auto px-4">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature Card Template -->
                <div
                    class="bg-white border border-gray-100 overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="aspect-video w-full">
                        <img src="assets/images/home/consultation.jpg" alt="One-Hour Consultation"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="inline-block bg-blue-100 px-3 py-1 text-blue-800 text-xs font-medium mb-3 rounded">Time
                            Efficiency</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">One-Hour Consultation Cycle</h4>
                        <p class="text-gray-600 mb-4 text-sm">From doctor visits to prescription fulfillment—fast and
                            efficient.</p>
                        <a href="#"
                            class="group text-blue-600 font-medium inline-flex items-center hover:text-blue-800 transition-colors text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white border border-gray-100  overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="aspect-video w-full">
                        <img src="assets/images/home/telehealth.jpg" alt="Telehealth Convenience"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="inline-block bg-green-100 px-3 py-1 text-green-800 text-xs font-medium mb-3 rounded">
                            Accessibility</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Telehealth Convenience</h4>
                        <p class="text-gray-600 mb-4 text-sm">Easy access to doctors without long wait times.</p>
                        <a href="#"
                            class="group text-blue-600 font-medium inline-flex items-center hover:text-blue-800 transition-colors text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white border border-gray-100  overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="aspect-video w-full">
                        <img src="assets/images/home/homecare.jpg" alt="Home Care Services"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="inline-block bg-purple-100 px-3 py-1 text-purple-800 text-xs font-medium mb-3 rounded">
                            Comfort</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Home Care Services</h4>
                        <p class="text-gray-600 mb-4 text-sm">Medical support delivered to your doorstep.</p>
                        <a href="#"
                            class="group text-blue-600 font-medium inline-flex items-center hover:text-blue-800 transition-colors text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div
                    class="bg-white border border-gray-100  overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="aspect-video w-full">
                        <img src="assets/images/home/smart-health.jpg" alt="Smart Health Monitoring"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="inline-block bg-red-100 px-3 py-1 text-red-800 text-xs font-medium mb-3 rounded">
                            Monitoring</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Smart Health Monitoring</h4>
                        <p class="text-gray-600 mb-4 text-sm">AI-driven insights for better health tracking.</p>
                        <a href="#"
                            class="group text-blue-600 font-medium inline-flex items-center hover:text-blue-800 transition-colors text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div
                    class="bg-white border border-gray-100  overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="aspect-video w-full">
                        <img src="assets/images/home/health-data.jpg" alt="Data-Powered Personalization"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="inline-block bg-yellow-100 px-3 py-1 text-yellow-800 text-xs font-medium mb-3 rounded">
                            Personalization</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Data-Powered Personalization</h4>
                        <p class="text-gray-600 mb-4 text-sm">AI recommendations tailored for better patient outcomes.</p>
                        <a href="#"
                            class="group text-blue-600 font-medium inline-flex items-center hover:text-blue-800 transition-colors text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div
                    class="bg-white border border-gray-100  overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="aspect-video w-full">
                        <img src="assets/images/home/patient-friendly.jpg" alt="Patient-Friendly Experience"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="inline-block bg-indigo-100 px-3 py-1 text-indigo-800 text-xs font-medium mb-3 rounded">
                            User Experience</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Patient-Friendly Experience</h4>
                        <p class="text-gray-600 mb-4 text-sm">Simple and clear service descriptions for effortless use.</p>
                        <a href="#"
                            class="group text-blue-600 font-medium inline-flex items-center hover:text-blue-800 transition-colors text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <div class="mt-16 bg-blue-600 text-white">
            <div class="container mx-auto px-4 py-12">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 text-center md:text-left">
                        <h3 class="text-2xl font-bold mb-2">Experience Patient-First Healthcare</h3>
                        <p class="text-blue-100">Join thousands of satisfied patients using our services</p>
                    </div>
                    <a href="#"
                        class="px-8 py-3 bg-white text-blue-600 font-medium hover:bg-blue-50 transition-colors duration-300 rounded-lg">
                        Schedule an Appointment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Telth CTA Card Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-10 items-center bg-blue-50 overflow-hidden ">
                <div class="p-8 md:p-12 lg:p-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Revolutionize Your Healthcare Experience
                    </h2>
                    <div class="h-1 w-24 bg-blue-600 mb-6"></div>
                    <p class="text-gray-700 text-base md:text-lg mb-8 max-w-xl">
                        Telth is committed to transforming healthcare delivery with innovative, patient-centric solutions.
                        Our platform connects patients, healthcare professionals, and providers seamlessly.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#"
                            class="inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            Get Started
                        </a>
                        <a href="#"
                            class="inline-block px-8 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <img src="assets/images/home/cta.webp" alt="Healthcare Technology" class="w-auto h-full ">
                </div>
            </div>
        </div>
    </section>



@endsection
@push('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper with creative effect
            const swiperHero = new Swiper('.hero-swiper', {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                grabCursor: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'creative',
                creativeEffect: {
                    prev: {
                        shadow: true,
                        translate: ['-20%', 0, -1],
                    },
                    next: {
                        translate: ['100%', 0, 0],
                    },
                },
                speed: 1000,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                // Explicitly set custom navigation
                navigation: {
                    prevEl: '.swiper-prev-custom',
                    nextEl: '.swiper-next-custom',
                },
            });

            // Optional: Add hover pause for autoplay
            const heroSlider = document.querySelector('.hero-swiper');
            heroSlider.addEventListener('mouseenter', () => {
                swiperHero.autoplay.stop();
            });
            heroSlider.addEventListener('mouseleave', () => {
                swiperHero.autoplay.start();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.getElementById('gradient-cta-card');
            const gradientBg = document.getElementById('gradient-background');
            const gradientBorder = document.getElementById('gradient-border');

            // Performance optimization
            let ticking = false;

            // Show gradient on hover
            card.addEventListener('mouseenter', function() {
                gradientBg.style.opacity = '1';
            });

            card.addEventListener('mouseleave', function() {
                gradientBg.style.opacity = '0';
            });

            // Update gradient position based on mouse movement
            card.addEventListener('mousemove', function(e) {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        updateGradient(e);
                        ticking = false;
                    });
                    ticking = true;
                }
            });

            function updateGradient(e) {
                const rect = card.getBoundingClientRect();

                // Calculate mouse position as percentage of card dimensions
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;

                // Create dynamic gradient based on mouse position
                // This uses conic-gradient for a more dynamic, flowing effect
                gradientBorder.style.background = `
            conic-gradient(
                from ${(x / 100) * 360}deg at ${x}% ${y}%,
                rgb(192, 132, 252) 0%, 
                rgb(244, 114, 182) 25%, 
                rgb(59, 130, 246) 50%,
                rgb(139, 92, 246) 75%, 
                rgb(192, 132, 252) 100%
            )
        `;
            }
        });
    </script>
@endpush
