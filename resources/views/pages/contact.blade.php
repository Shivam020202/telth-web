@extends('layouts.app')

@section('title', 'Contact Us')

<style>
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .gradient-animate {
        background-size: 200% 200%;
        animation: gradient 15s ease infinite;
    }
</style>

@section('content')
    <!-- Contact Page Container -->
    <div class="min-h-screen ">
        <!-- Header Section with Animated Background -->
        <div class="relative h-[50vh] flex items-center justify-center overflow-hidden">
            <!-- Animated gradient background -->
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/10 via-purple-600/10 to-blue-600/10">
                <div class="absolute inset-0 backdrop-blur-3xl"></div>
            </div>

            <!-- Geometric shapes -->
            <div class="absolute inset-0">
                <div class="absolute top-20 left-20 w-48 h-48 bg-indigo-500/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-20 w-48 h-48 bg-purple-500/20 rounded-full blur-3xl"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1
                    class="text-6xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 mb-6">
                    Let's Connect
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Transform your ideas into reality. Reach out and let's create something extraordinary together.
                </p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mb-10 mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-10">
            <!-- Contact Form and Info Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Contact Form - Spans 2 columns -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-xl p-8 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-indigo-600/10 via-purple-600/10 to-transparent rounded-bl-full">
                    </div>

                    <h2 class="text-2xl font-bold text-gray-800 mb-6" id="contact-form">Send a Message</h2>
                    <form action="#" method="POST" class="space-y-6 relative">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <input type="text" name="name" required
                                    class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 px-4 py-3 text-gray-800 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-0 rounded-lg transition-colors"
                                    placeholder="Your Name">
                            </div>

                            <div class="group">
                                <input type="email" name="email" required
                                    class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 px-4 py-3 text-gray-800 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-0 rounded-lg transition-colors"
                                    placeholder="Email Address">
                            </div>
                        </div>

                        <div class="group">
                            <input type="text" name="subject" required
                                class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 px-4 py-3 text-gray-800 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-0 rounded-lg transition-colors"
                                placeholder="Subject">
                        </div>

                        <div class="group">
                            <textarea name="message" rows="4" required
                                class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 px-4 py-3 text-gray-800 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-0 rounded-lg transition-colors resize-none"
                                placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit"
                            class="group relative px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <span class="relative z-10 flex items-center justify-center text-white font-medium">
                                Send Message
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6">
                    <!-- Location Info -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 relative overflow-hidden group hover:shadow-xl transition-shadow">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-indigo-600/10 via-purple-600/10 to-transparent rounded-bl-full transform group-hover:scale-110 transition-transform">
                        </div>

                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Visit Our Space</h3>
                        <div class="space-y-2 text-gray-600">
                            <p class="flex items-center">
                                <svg class="w-5 h-5 text-indigo-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                123 Innovation Hub<br>
                                Design District<br>
                                Creative City, ST 12345
                            </p>
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 relative overflow-hidden group hover:shadow-xl transition-shadow">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-purple-600/10 via-blue-600/10 to-transparent rounded-bl-full transform group-hover:scale-110 transition-transform">
                        </div>

                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Get in Touch</h3>
                        <div class="space-y-4">
                            <p class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                hello@example.com
                            </p>
                            <p class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                +1 (555) 123-4567
                            </p>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 relative overflow-hidden group hover:shadow-xl transition-shadow">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-600/10 via-indigo-600/10 to-transparent rounded-bl-full transform group-hover:scale-110 transition-transform">
                        </div>

                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Working Hours</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center text-gray-600">
                                <span>Mon - Fri</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center text-gray-600">
                                <span>Sat - Sun</span>
                                <span>By Appointment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/5 via-purple-600/5 to-blue-600/5"></div>
                <div class="relative z-10">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-2">12+</div>
                            <div class="text-gray-600 text-sm">Countries</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 mb-2">50+</div>
                            <div class="text-gray-600 text-sm">Cities</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">100+</div>
                            <div class="text-gray-600 text-sm">Projects</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-2">500+</div>
                            <div class="text-gray-600 text-sm">Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16  bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class=" mx-auto">
                <!-- Section Header -->
                <div class="relative mb-16">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span
                            class="px-4 bg-gradient-to-r from-gray-50 via-white to-gray-50 text-sm font-medium text-gray-500">
                            Frequently Asked Questions
                        </span>
                    </div>
                </div>

                <!-- FAQ Items -->
                <div class="space-y-6" x-data="{ activeIndex: null }">
                    <!-- FAQ Item 1 -->
                    <div class="relative group" x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen; activeIndex = isOpen ? 0 : null" :class="{ 'z-10': isOpen }">
                        <div class="flex items-center justify-between p-5 bg-white rounded-lg shadow-sm transition-all duration-200 ease-in-out hover:shadow-md cursor-pointer"
                            :class="{ 'bg-indigo-50': isOpen }">
                            <h3
                                class="text-lg font-medium text-gray-900 group-hover:text-indigo-600 transition-colors duration-200">
                                How quickly can I expect a response to my inquiry?
                            </h3>
                            <span class="ml-6 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-indigo-500 transition-transform duration-200"
                                    :class="{ 'rotate-180': isOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-300" x-ref="container"
                            x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                            style="max-height: 0px">
                            <div class="p-6 bg-white rounded-b-lg">
                                <p class="text-gray-700 leading-relaxed">
                                    We typically respond to all inquiries within 24 hours during business days. For urgent
                                    matters, we recommend using our priority support channel available to premium members.
                                </p>
                                <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-indigo-400 to-indigo-600 rounded-r-lg transform scale-y-0 transition-transform duration-200"
                                    :class="{ 'scale-y-100': isOpen }">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="relative group" x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen; activeIndex = isOpen ? 1 : null" :class="{ 'z-10': isOpen }">
                        <div class="flex items-center justify-between p-5 bg-white rounded-lg shadow-sm transition-all duration-200 ease-in-out hover:shadow-md cursor-pointer"
                            :class="{ 'bg-indigo-50': isOpen }">
                            <h3
                                class="text-lg font-medium text-gray-900 group-hover:text-indigo-600 transition-colors duration-200">
                                What payment methods do you accept?
                            </h3>
                            <span class="ml-6 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-indigo-500 transition-transform duration-200"
                                    :class="{ 'rotate-180': isOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-300" x-ref="container"
                            x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                            style="max-height: 0px">
                            <div class="p-6 bg-white rounded-b-lg">
                                <p class="text-gray-700 leading-relaxed">
                                    We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank
                                    transfers for business accounts. All payments are processed securely through our
                                    encrypted payment gateway.
                                </p>
                                <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-indigo-400 to-indigo-600 rounded-r-lg transform scale-y-0 transition-transform duration-200"
                                    :class="{ 'scale-y-100': isOpen }">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="relative group" x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen; activeIndex = isOpen ? 2 : null" :class="{ 'z-10': isOpen }">
                        <div class="flex items-center justify-between p-5 bg-white rounded-lg shadow-sm transition-all duration-200 ease-in-out hover:shadow-md cursor-pointer"
                            :class="{ 'bg-indigo-50': isOpen }">
                            <h3
                                class="text-lg font-medium text-gray-900 group-hover:text-indigo-600 transition-colors duration-200">
                                Do you offer international shipping?
                            </h3>
                            <span class="ml-6 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-indigo-500 transition-transform duration-200"
                                    :class="{ 'rotate-180': isOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-300" x-ref="container"
                            x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                            style="max-height: 0px">
                            <div class="p-6 bg-white rounded-b-lg">
                                <p class="text-gray-700 leading-relaxed">
                                    Yes, we ship to over 100 countries worldwide. Shipping costs and delivery times vary by
                                    location. You can calculate exact shipping costs by entering your address at checkout.
                                </p>
                                <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-indigo-400 to-indigo-600 rounded-r-lg transform scale-y-0 transition-transform duration-200"
                                    :class="{ 'scale-y-100': isOpen }">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="relative group" x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen; activeIndex = isOpen ? 3 : null" :class="{ 'z-10': isOpen }">
                        <div class="flex items-center justify-between p-5 bg-white rounded-lg shadow-sm transition-all duration-200 ease-in-out hover:shadow-md cursor-pointer"
                            :class="{ 'bg-indigo-50': isOpen }">
                            <h3
                                class="text-lg font-medium text-gray-900 group-hover:text-indigo-600 transition-colors duration-200">
                                What is your refund policy?
                            </h3>
                            <span class="ml-6 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-indigo-500 transition-transform duration-200"
                                    :class="{ 'rotate-180': isOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-300" x-ref="container"
                            x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''"
                            style="max-height: 0px">
                            <div class="p-6 bg-white rounded-b-lg">
                                <p class="text-gray-700 leading-relaxed">
                                    We offer a 30-day money-back guarantee on all our products. If you're not completely
                                    satisfied, simply return the unused product in its original packaging for a full refund.
                                </p>
                                <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-indigo-400 to-indigo-600 rounded-r-lg transform scale-y-0 transition-transform duration-200"
                                    :class="{ 'scale-y-100': isOpen }">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="mt-12 text-center">
                    <p class="text-base text-gray-500">
                        Still have questions? We're here to help.
                    </p>
                    <a href="#contact-form"
                        class="mt-4 inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                        Contact Support
                        <svg class="ml-2 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- resources/views/components/dynamic-cta.blade.php -->
    <section class="relative overflow-hidden">
        <!-- Diagonal Background Sections -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900 to-slate-800 ">
            </div>
            <div
                class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-600/10 to-purple-600/10  backdrop-blur-3xl">
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-r from-blue-400/20 to-purple-400/20 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-gradient-to-r from-purple-400/20 to-pink-400/20 rounded-full blur-3xl">
            </div>
        </div>

        <!-- Content Container -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16">
                <!-- Left Content -->
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Transform Your
                        <span class="relative">
                            <span class="relative z-10">Enterprise</span>
                            <span class="absolute bottom-2 left-0 w-full h-3 bg-blue-500/30 -rotate-1"></span>
                        </span>
                    </h2>

                    <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0">
                        Join industry leaders who've achieved breakthrough results with our innovative solutions. Experience
                        the future of enterprise technology today.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#get-started"
                            class="inline-flex items-center px-8 py-4 bg-white text-slate-900 rounded-lg font-semibold hover:bg-gray-100 transition-colors group">
                            Get Started
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="#learn-more"
                            class="inline-flex items-center px-8 py-4 border-2 border-white/20 text-white rounded-lg font-semibold hover:bg-white/10 transition-colors">
                            Watch Demo
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                        <div class="flex flex-col items-center lg:items-start">
                            <div class="text-3xl font-bold text-white">500+</div>
                            <div class="text-sm text-gray-400">Enterprise Clients</div>
                        </div>
                        <div class="flex flex-col items-center lg:items-start">
                            <div class="text-3xl font-bold text-white">98%</div>
                            <div class="text-sm text-gray-400">Success Rate</div>
                        </div>
                        <div class="flex flex-col items-center lg:items-start">
                            <div class="text-3xl font-bold text-white">24/7</div>
                            <div class="text-sm text-gray-400">Expert Support</div>
                        </div>
                        <div class="flex flex-col items-center lg:items-start">
                            <div class="text-3xl font-bold text-white">15+</div>
                            <div class="text-sm text-gray-400">Years Experience</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Floating Cards -->
                <div class="flex-1 relative w-full max-w-md">
                    <div class="relative">
                        <!-- Main Feature Card -->
                        <div
                            class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 shadow-xl relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-pink-500 rounded-full"></div>
                                </div>
                                <div class="text-white/60 text-sm">Enterprise Suite</div>
                            </div>

                            <!-- Feature List -->
                            <div class="space-y-4">
                                <div class="flex items-center text-white">
                                    <svg class="w-5 h-5 text-blue-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Advanced Analytics
                                </div>
                                <div class="flex items-center text-white">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Cloud Integration
                                </div>
                                <div class="flex items-center text-white">
                                    <svg class="w-5 h-5 text-pink-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    24/7 Support
                                </div>
                            </div>
                        </div>

                        <!-- Floating Accent Cards -->
                        <div
                            class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-2xl transform rotate-12 backdrop-blur-lg border border-white/10">
                        </div>
                        <div
                            class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-2xl transform -rotate-12 backdrop-blur-lg border border-white/10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
