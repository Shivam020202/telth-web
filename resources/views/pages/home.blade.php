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
    <section class="relative w-full h-[80vh] overflow-hidden bg-gray-900">
        <!-- Slider Container -->
        <div class="swiper-container hero-swiper h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1502905704466-2690947baeee?q=80&w=2938&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Hero Banner 1" class="w-full h-full object-cover object-center" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-transparent"></div>
                    </div>

                    <div class="relative z-10 container mx-auto h-full flex items-center px-4">
                        <div class="max-w-2xl text-white">
                            <span class="inline-block mb-4 text-sm font-semibold text-primary-400">
                                Innovating Tomorrow
                            </span>
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                                Transforming Ideas into Digital Reality
                            </h1>
                            <p class="text-lg mb-8 opacity-90">
                                We deliver cutting-edge solutions that drive growth and innovation.
                                Partner with us to shape the future of your business.
                            </p>
                            <div class="flex gap-4">
                                <a href="/contact"
                                    class="bg-primary-500 hover:bg-primary-600 px-8 py-3 rounded-lg font-semibold transition-colors">
                                    Get Started
                                </a>
                                <a href="/about"
                                    class="border border-white/20 hover:border-white/40 px-8 py-3 rounded-lg font-semibold transition-colors">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1578351709253-928714cb0595?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Hero Banner 1" class="w-full h-full object-cover object-center" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-transparent"></div>
                    </div>

                    <div class="relative z-10 container mx-auto h-full flex items-center px-4">
                        <div class="max-w-2xl text-white">
                            <span class="inline-block mb-4 text-sm font-semibold text-primary-400">
                                Innovating Tomorrow
                            </span>
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                                Transforming Ideas into Digital Reality
                            </h1>
                            <p class="text-lg mb-8 opacity-90">
                                We deliver cutting-edge solutions that drive growth and innovation.
                                Partner with us to shape the future of your business.
                            </p>
                            <div class="flex gap-4">
                                <a href="/contact"
                                    class="bg-primary-500 hover:bg-primary-600 px-8 py-3 rounded-lg font-semibold transition-colors">
                                    Get Started
                                </a>
                                <a href="/about"
                                    class="border border-white/20 hover:border-white/40 px-8 py-3 rounded-lg font-semibold transition-colors">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Similar structure with different content -->
            </div>

            <!-- Slider Controls -->
            <div class="swiper-pagination !bottom-8"></div>

            <div class="swiper-button-prev !text-white after:text-md w-6 h-6"></div>
            <div class="swiper-button-next !text-white after:text-md"></div>
        </div>

        <!-- Organization Identity Marker -->
        <div class="absolute bottom-8 right-8 z-20 flex items-center gap-2">
            <img src="https://mytelth.com/assets/telth_logo_white.png" alt="Company Logo" class="w-8 h-8" loading="lazy">
            <span class="text-white font-semibold text-sm">Telth</span>
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

                    <!-- Statistics Panel (Fixed Height) -->
                    {{-- <div class="flex relative bg-teal-900 p-8 rounded-2xl overflow-hidden h-[300px] lg:h-[250px]">
                        <div class="absolute inset-0 bg-[url('../images/pattern.svg')] opacity-10"></div>
                        <div class="relative flex-1 flex items-center justify-between text-white">
                            <div class="text-center flex-1">
                                <p class="text-5xl font-bold mb-1">15K+</p>
                                <p class="text-sm font-light opacity-90">Medical Devices Deployed</p>
                            </div>
                            <!-- Add other stats -->
                            <div class="flex-1 border-l border-white/20 pl-8">
                                <a href="/about"
                                    class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 px-6 py-3 rounded-lg transition-all duration-300">
                                    <span>Our Achievements</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Partner Carousel -->
            <div class="mt-16 pt-12 border-t border-gray-100 overflow-hidden">
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
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class=" mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="text-indigo-600 text-sm font-semibold tracking-wider uppercase">Healthcare Services</span>
                <h2 class="mt-3 text-4xl font-bold text-gray-900">Comprehensive Care Solutions</h2>
                <p class="mt-4 text-lg text-gray-600">Discover our range of innovative healthcare services designed to
                    provide the best care experience</p>
            </div>

            <!-- Slider Container -->
            <div x-data="{
                activeSlide: 0,
                slides: [{
                        title: 'Chronic Care Management',
                        image: '/api/placeholder/600/400',
                        description: 'Comprehensive management of chronic conditions with continuous monitoring and personalized care plans.',
                        features: ['24/7 Condition Monitoring', 'Personalized Treatment Plans', 'Regular Health Assessments'],
                        specialists: ['Chronic Disease Specialists', 'Nutritionists', 'Care Coordinators'],
                        link: '#care-programs/chronic'
                    },
                    {
                        title: 'Preventive Healthcare',
                        image: '/api/placeholder/600/400',
                        description: 'Proactive health monitoring and preventive care programs to maintain optimal wellness.',
                        features: ['Health Risk Assessments', 'Vaccination Programs', 'Lifestyle Coaching'],
                        specialists: ['Preventive Care Physicians', 'Wellness Coaches', 'Fitness Experts'],
                        link: '#care-programs/preventive'
                    },
                    {
                        title: 'Mobile Healthcare',
                        image: '/api/placeholder/600/400',
                        description: 'On-demand healthcare services brought directly to your location with fully equipped medical units.',
                        features: ['Home Medical Visits', 'Mobile Diagnostics', 'Emergency Response'],
                        specialists: ['Emergency Physicians', 'Mobile Care Teams', 'Paramedics'],
                        link: '#mobile-healthcare'
                    },
                    {
                        title: 'Smart Care Solutions',
                        image: '/api/placeholder/600/400',
                        description: 'Technology-driven healthcare solutions for remote monitoring and efficient care delivery.',
                        features: ['Remote Patient Monitoring', 'AI-Powered Diagnostics', 'Digital Health Records'],
                        specialists: ['Telemedicine Experts', 'Digital Health Specialists', 'Healthcare Technologists'],
                        link: '#smart-solutions'
                    }
                ]
            }" class="relative">
                <!-- Main Content Area -->
                <div class="relative aspect-auto py-10 bg-gray-100 rounded-2xl overflow-hidden shadow-lg">
                    <!-- Image Background -->
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="activeSlide === index" x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100" class="absolute inset-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-gray-900/50"></div>
                            <img :src="slide.image" :alt="slide.title" class="w-full h-full object-cover">
                        </div>
                    </template>

                    <!-- Content Overlay -->
                    <div class="relative h-full flex items-center">
                        <div class="w-full lg:w-3/5 p-8 lg:p-12 text-white">
                            <template x-for="(slide, index) in slides" :key="index">
                                <div x-show="activeSlide === index"
                                    x-transition:enter="transition ease-out delay-200 duration-500"
                                    x-transition:enter-start="opacity-0 transform translate-y-4"
                                    x-transition:enter-end="opacity-100 transform translate-y-0" class="space-y-6">
                                    <h3 class="text-3xl font-bold" x-text="slide.title"></h3>
                                    <p class="text-lg text-gray-200" x-text="slide.description"></p>

                                    <div class="grid grid-cols-2 gap-6 mt-8">
                                        <!-- Key Features -->
                                        <div>
                                            <h4
                                                class="text-sm font-semibold uppercase tracking-wider text-indigo-400 mb-4">
                                                Key Features</h4>
                                            <ul class="space-y-2">
                                                <template x-for="feature in slide.features" :key="feature">
                                                    <li class="flex items-center text-sm">
                                                        <svg class="w-4 h-4 text-indigo-400 mr-2" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        <span x-text="feature"></span>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>

                                        <!-- Specialist Team -->
                                        <div>
                                            <h4
                                                class="text-sm font-semibold uppercase tracking-wider text-indigo-400 mb-4">
                                                Specialist Team</h4>
                                            <ul class="space-y-2">
                                                <template x-for="specialist in slide.specialists" :key="specialist">
                                                    <li class="flex items-center text-sm">
                                                        <svg class="w-4 h-4 text-indigo-400 mr-2" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                            </path>
                                                        </svg>
                                                        <span x-text="specialist"></span>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>
                                    </div>

                                    <a :href="slide.link"
                                        class="inline-flex items-center mt-6 px-6 py-3 border border-transparent text-base font-medium rounded-lg text-gray-900 bg-white hover:bg-gray-50 transition-colors duration-300">
                                        Learn More
                                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Navigation Controls -->
                <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-4">
                    <div class="flex space-x-3">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="activeSlide = index"
                                :class="{ 'bg-white': activeSlide === index, 'bg-gray-400': activeSlide !== index }"
                                class="w-3 h-3 rounded-full transition-colors duration-300">
                            </button>
                        </template>
                    </div>
                </div>

                <!-- Arrow Navigation -->
                <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                    class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1"
                    class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    {{-- device carousel --}}
    {{-- @php
        $devices = [
            [
                'name' => 'DIA lab',
                'image' => '_DJ_2102.webp',
            ],
            [
                'name' => 'Smart chip',
                'image' => '_DJ_2132.webp',
            ],
            [
                'name' => 'Smart Watch',
                'image' => '_DJ_2139.webp',
            ],
            [
                'name' => 'Test Kit',
                'image' => '_DJ_2155.webp',
            ],
            [
                'name' => 'Immunoalaizer',
                'image' => '_DJ_2204.webp',
            ],
            [
                'name' => 'Immunoalaizer',
                'image' => '_DJ_2232.webp',
            ],
            [
                'name' => 'Immunoalaizer',
                'image' => '_DJ_2248.webp',
            ],
            [
                'name' => 'Immunoalaizer',
                'image' => 'G.CGM3.webp',
            ],
        ];
    @endphp
    <div class="w-full pb-10 bg-white overflow-hidden ">
        <div class="container mx-auto">
            <h3 class="font-bold text-gray-700 text-3xl">Our tech</h3>
            <p class="text-gray-600">Devices that power your and our ecosystem</p>
        </div>
        <div class=" container mx-auto relative">
            <!-- First row of flowing items -->
            <div class="flex animate-flow whitespace-nowrap">
                @foreach ($devices as $device)
                    <div class="inline-flex flex-none mx-4">
                        <div class="bg-white rounded-xl p-6 w-fit">
                            <div class="flex items-center justify-center">
                                <img src="assets/images/{{ $device['image'] }}" alt="{{ $device['name'] }}"
                                    class="h-24 w-auto object-contain">
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="text-md  text-gray-600">{{ $device['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Duplicate items for seamless loop -->
                @foreach ($devices as $device)
                    <div class="inline-flex flex-none mx-4">
                        <div class="bg-white rounded-xl  p-6 w-fit">
                            <div class="flex items-center justify-center">
                                <img src="assets/images/{{ $device['image'] }}" alt="{{ $device['name'] }}"
                                    class="h-24 w-auto object-contain">
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="text-md  text-gray-600">{{ $device['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    {{-- resources/views/components/key-solutions-section.blade.php --}}
    <section class="relative py-20 overflow-hidden">
        <!-- Background Image Placeholder - Right Side -->
        {{-- <div class="absolute top-0 right-0 w-full h-full">
            <img src="https://img.freepik.com/free-photo/particle-lines-futuristic-gradient-background_53876-104053.jpg?t=st=1738656440~exp=1738660040~hmac=96f2777923dcff77a90af0c2b3388eb633bf0535827f38f8376ba28c1f3503a5&w=1800"
                alt="Background texture" class="object-cover w-full h-full " />
        </div> --}}

        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="max-w-2xl mb-20">
                <span class="text-indigo-600 text-sm font-semibold tracking-wider uppercase">Our Solutions</span>
                <h2 class="mt-3 text-4xl font-bold text-gray-900 leading-tight">
                    Revolutionizing Healthcare Through Innovation
                </h2>
            </div>

            <!-- Solutions List -->
            <div class="space-y-24">
                <!-- Smart Diagnostics -->
                <div class="group">
                    <div class="flex flex-col lg:flex-row items-center lg:items-start gap-12">
                        <div class="w-full lg:w-1/3 aspect-auto overflow-hidden rounded-2xl">
                            <img src="https://images.unsplash.com/photo-1549890762-0a3f8933bc76?q=80&w=2768&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Smart Diagnostics"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" />
                        </div>
                        <div class="w-full lg:w-2/3 space-y-2">
                            <h3 class="text-2xl font-semibold text-gray-900">Smart Diagnostics</h3>
                            <p class="text-gray-600 leading-relaxed pt-2">Advanced diagnostic solutions powered by IoMT
                                devices
                                and AI analysis, delivering accurate results with unprecedented speed and precision.</p>

                            <!-- Expandable Content -->
                            <div x-data="{ open: false }" class="mt-0">
                                <button @click="open = !open"
                                    class="flex items-center text-indigo-600 hover:text-indigo-700 font-medium">
                                    <span x-text="open ? 'Show Less' : 'Show More'">Show More</span>
                                    <svg class="w-5 h-5 ml-2 transform transition-transform"
                                        :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                                    x-transition:enter-end="opacity-100 transform translate-y-0" class="mt-6 space-y-4">
                                    <ul class="space-y-3 text-gray-600">
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            Point of Care Testing with Real-time Results
                                        </li>
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            IoMT Integration for Continuous Monitoring
                                        </li>
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            AI-Powered Digital Lab Services
                                        </li>
                                    </ul>
                                    <a href="#solutions/diagnostics"
                                        class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mt-4">
                                        Learn more about Smart Diagnostics
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Care2Home -->
                <div class="group">
                    <div class="flex flex-col lg:flex-row-reverse items-center lg:items-start gap-12">
                        <div class="w-full lg:w-1/3 aspect-auto overflow-hidden rounded-2xl">
                            <img src="https://images.unsplash.com/photo-1549890762-0a3f8933bc76?q=80&w=2768&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Care2Home"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" />
                        </div>
                        <div class="w-full lg:w-2/3 space-y-2">
                            <h3 class="text-2xl font-semibold text-gray-900">Care2Home</h3>
                            <p class="text-gray-600 leading-relaxed pt-2">Bringing professional healthcare to your doorstep
                                with
                                smart monitoring systems and dedicated care management.</p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                    24/7 Professional Remote Monitoring
                                </li>
                                <li class="flex items-center">
                                    <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                    Smart Health Device Integration
                                </li>
                            </ul>

                            <!-- Expandable Content -->
                            <div x-data="{ open: false }" class="pt-4">
                                <button @click="open = !open"
                                    class="flex items-center text-indigo-600 hover:text-indigo-700 font-medium">
                                    <span x-text="open ? 'Show Less' : 'Show More'">Show More</span>
                                    <svg class="w-5 h-5 ml-2 transform transition-transform"
                                        :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                                    x-transition:enter-end="opacity-100 transform translate-y-0" class="mt-6 space-y-4">
                                    <ul class="space-y-3 text-gray-600">
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            24/7 Professional Remote Monitoring
                                        </li>
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            Smart Health Device Integration
                                        </li>
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            Dedicated Care Manager Support
                                        </li>
                                    </ul>
                                    <a href="#solutions/care2home"
                                        class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mt-4">
                                        Learn more about Care2Home
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Health Card -->
                <div class="group">
                    <div class="flex flex-col lg:flex-row items-center lg:items-start gap-12">
                        <div class="w-full lg:w-1/2 aspect-video overflow-hidden rounded-2xl">
                            <img src="https://images.unsplash.com/photo-1549890762-0a3f8933bc76?q=80&w=2768&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Health Card"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" />
                        </div>
                        <div class="w-full lg:w-1/2 space-y-6">
                            <h3 class="text-2xl font-semibold text-gray-900">Health Card</h3>
                            <p class="text-gray-600 leading-relaxed">A unified solution for healthcare access, payments,
                                and records management in one secure digital card.</p>

                            <!-- Expandable Content -->
                            <div x-data="{ open: false }" class="pt-4">
                                <button @click="open = !open"
                                    class="flex items-center text-indigo-600 hover:text-indigo-700 font-medium">
                                    <span x-text="open ? 'Show Less' : 'Show More'">Show More</span>
                                    <svg class="w-5 h-5 ml-2 transform transition-transform"
                                        :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                                    x-transition:enter-end="opacity-100 transform translate-y-0" class="mt-6 space-y-4">
                                    <ul class="space-y-3 text-gray-600">
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            Seamless Payment Integration
                                        </li>
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            Comprehensive Insurance Coverage
                                        </li>
                                        <li class="flex items-center">
                                            <div class="w-1.5 h-1.5 rounded-full bg-indigo-600 mr-3"></div>
                                            Secure Digital Health Records
                                        </li>
                                    </ul>
                                    <a href="#solutions/health-card"
                                        class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mt-4">
                                        Learn more about Health Card
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@push('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            speed: 800,
            autoplay: {
                delay: 8000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        const partnerCarousel = new Swiper('.partner-carousel', {
            slidesPerView: 'auto',
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
            },
        });
    </script>
@endpush
