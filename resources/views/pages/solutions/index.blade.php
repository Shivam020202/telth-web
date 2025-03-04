@extends('layouts.app')

@section('title', 'Solutions')

@section('content')

    <!-- resources/views/components/hero-section.blade.php -->
    <!-- resources/views/components/solutions-hero.blade.php -->
    <section class="relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900 to-slate-800"></div>
            <div
                class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,rgba(59,130,246,0.15),transparent_50%)]">
            </div>
            <div
                class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_left,rgba(99,102,241,0.15),transparent_50%)]">
            </div>
            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,rgba(0,0,0,0.2)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,0.2)_1px,transparent_1px)] bg-[size:4rem_4rem]">
            </div>
        </div>

        <div class="relative max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <div
                        class="inline-flex items-center space-x-2 px-3 py-1 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-full backdrop-blur-sm border border-blue-500/10 mb-6">
                        <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                        <span class="text-blue-400 text-sm font-medium">Enterprise Solutions</span>
                    </div>

                    <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Innovative Solutions for
                        <span class="relative inline-block">
                            Modern Enterprises
                            <div
                                class="absolute bottom-1 left-0 w-full h-[6px] bg-gradient-to-r from-blue-500/40 to-indigo-500/40 transform -skew-x-6">
                            </div>
                        </span>
                    </h1>

                    <p class="text-lg text-gray-300 mb-8 leading-relaxed max-w-2xl">
                        Discover our comprehensive suite of enterprise solutions designed to transform your business
                        operations, enhance efficiency, and drive innovation across all sectors.
                    </p>

                    <!-- Solution Categories Grid -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="group">
                            <div
                                class="flex items-center space-x-3 p-4 bg-white/5 border border-white/10 rounded backdrop-blur-sm transition-all duration-300 hover:bg-white/10">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded flex items-center justify-center bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <span class="text-gray-200 group-hover:text-white transition-colors">Healthcare
                                    Technology</span>
                            </div>
                        </div>
                        <div class="group">
                            <div
                                class="flex items-center space-x-3 p-4 bg-white/5 border border-white/10 rounded backdrop-blur-sm transition-all duration-300 hover:bg-white/10">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded flex items-center justify-center bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <span class="text-gray-200 group-hover:text-white transition-colors">Data Analytics</span>
                            </div>
                        </div>
                        <div class="group">
                            <div
                                class="flex items-center space-x-3 p-4 bg-white/5 border border-white/10 rounded backdrop-blur-sm transition-all duration-300 hover:bg-white/10">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded flex items-center justify-center bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                    </svg>
                                </div>
                                <span class="text-gray-200 group-hover:text-white transition-colors">Cloud Solutions</span>
                            </div>
                        </div>
                        <div class="group">
                            <div
                                class="flex items-center space-x-3 p-4 bg-white/5 border border-white/10 rounded backdrop-blur-sm transition-all duration-300 hover:bg-white/10">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded flex items-center justify-center bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <span class="text-gray-200 group-hover:text-white transition-colors">Cybersecurity</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#explore"
                            class="px-8 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded font-medium hover:from-blue-600 hover:to-indigo-700 transition-all shadow-lg shadow-blue-500/25">
                            Explore Solutions
                        </a>
                        <a href="#contact"
                            class="px-8 py-3 bg-white/10 text-white rounded font-medium hover:bg-white/20 transition-all backdrop-blur-sm">
                            Contact Sales
                        </a>
                    </div>
                </div>

                <!-- Right Content - Solutions Visualization -->
                <div class="relative">
                    <div
                        class="relative bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-lg p-8 backdrop-blur-sm border border-blue-500/10 shadow-2xl">
                        <!-- Status Bar -->
                        <div class="flex items-center justify-between mb-8">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                                <div class="w-3 h-3 bg-indigo-500 rounded-full animate-pulse"
                                    style="animation-delay: 0.5s;"></div>
                                <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse" style="animation-delay: 1s;">
                                </div>
                            </div>
                            <span class="text-white/60 text-sm">Enterprise Overview</span>
                        </div>

                        <!-- Integration Points -->
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-white/5 p-4 rounded border border-white/10">
                                <div class="text-2xl font-bold text-white mb-1">100+</div>
                                <div class="text-sm text-gray-400">Enterprise Solutions</div>
                            </div>
                            <div class="bg-white/5 p-4 rounded border border-white/10">
                                <div class="text-2xl font-bold text-white mb-1">24/7</div>
                                <div class="text-sm text-gray-400">Support</div>
                            </div>
                            <div class="bg-white/5 p-4 rounded border border-white/10">
                                <div class="text-2xl font-bold text-white mb-1">99.9%</div>
                                <div class="text-sm text-gray-400">Uptime</div>
                            </div>
                            <div class="bg-white/5 p-4 rounded border border-white/10">
                                <div class="text-2xl font-bold text-white mb-1">500+</div>
                                <div class="text-sm text-gray-400">Clients</div>
                            </div>
                        </div>

                        <!-- Statistics -->
                        <div class="space-y-4">
                            <div class="relative pt-1">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="text-sm text-gray-400">Client Satisfaction</div>
                                    <div class="text-sm text-white">98%</div>
                                </div>
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-white/10">
                                    <div
                                        class="w-[98%] shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-blue-500 to-indigo-500">
                                    </div>
                                </div>
                            </div>
                            <div class="relative pt-1">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="text-sm text-gray-400">Implementation Success</div>
                                    <div class="text-sm text-white">95%</div>
                                </div>
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-white/10">
                                    <div
                                        class="w-[95%] shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-blue-500 to-indigo-500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded transform rotate-12 backdrop-blur-lg border border-white/10 -z-10">
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded transform -rotate-12 backdrop-blur-lg border border-white/10 -z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Solutions</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Solution Card 1 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-3">Solution 1</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800">Learn more →</a>
            </div>

            <!-- Solution Card 2 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-3">Solution 2</h2>
                <p class="text-gray-600 mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800">Learn more →</a>
            </div>

            <!-- Solution Card 3 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-3">Solution 3</h2>
                <p class="text-gray-600 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800">Learn more →</a>
            </div>
        </div>
    </div> --}}


@endsection
