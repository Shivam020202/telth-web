@extends('layouts.app')

@section('title', 'Care2Home')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-900 to-indigo-900">
        <!-- Geometric Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute h-full w-full bg-[radial-gradient(circle_at_30%_30%,rgba(59,130,246,0.08),transparent)]">
            </div>
            <div class="absolute h-full w-full bg-[radial-gradient(circle_at_70%_70%,rgba(99,102,241,0.08),transparent)]">
            </div>
            <!-- Animated Pulse Elements -->
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 0s;"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-indigo-500/5 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>
        </div>

        <div class="relative max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <div
                        class="inline-flex items-center space-x-2 px-3 py-1 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-full backdrop-blur-sm border border-blue-500/10 mb-6">
                        <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                        <span class="text-blue-400 text-sm font-medium">Revolutionizing Healthcare</span>
                    </div>

                    <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-400">Care2Home:</span>
                        Unmatched Speed, Innovation, and Scalable Healthcare Solutions
                    </h1>

                    <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                        Care2Home revolutionizes home healthcare with AI-powered, real-time monitoring and seamless
                        integration into government health programs, ensuring accessibility and scalability within public
                        healthcare systems.
                    </p>

                    <!-- Key Features Grid -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start space-x-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/10 to-indigo-500/10 flex items-center justify-center border border-blue-500/10">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">1-Hour Delivery</h3>
                                <p class="text-gray-400 text-sm">E-Pharmacy service with guaranteed rapid delivery</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/10 to-indigo-500/10 flex items-center justify-center border border-blue-500/10">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">AI-Powered</h3>
                                <p class="text-gray-400 text-sm">Real-time monitoring and smart healthcare solutions</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#learn-more"
                            class="px-8 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg font-medium hover:from-blue-600 hover:to-indigo-700 transition-all shadow-lg shadow-blue-500/25">
                            Learn More
                        </a>
                        <a href="#contact"
                            class="px-8 py-3 bg-white/10 text-white rounded-lg font-medium hover:bg-white/20 transition-all backdrop-blur-sm">
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Right Content - Abstract Representation -->
                <div class="relative">
                    <div
                        class="relative bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-2xl p-8 backdrop-blur-sm border border-blue-500/10 shadow-2xl">
                        <!-- Healthcare Integration Visualization -->
                        <div class="space-y-6">
                            <!-- Status Bar -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                                    <div class="w-3 h-3 bg-indigo-500 rounded-full animate-pulse"
                                        style="animation-delay: 0.5s;"></div>
                                    <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse"
                                        style="animation-delay: 1s;"></div>
                                </div>
                                <span class="text-white/60 text-sm">Live Monitoring</span>
                            </div>

                            <!-- Integration Points -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                                    <div class="text-2xl font-bold text-white mb-1">24/7</div>
                                    <div class="text-sm text-gray-400">Monitoring</div>
                                </div>
                                <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                                    <div class="text-2xl font-bold text-white mb-1">1hr</div>
                                    <div class="text-sm text-gray-400">Delivery</div>
                                </div>
                                <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                                    <div class="text-2xl font-bold text-white mb-1">AI</div>
                                    <div class="text-sm text-gray-400">Powered</div>
                                </div>
                                <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                                    <div class="text-2xl font-bold text-white mb-1">100%</div>
                                    <div class="text-sm text-gray-400">Integration</div>
                                </div>
                            </div>

                            <!-- Progress Indicators -->
                            <div class="space-y-3">
                                <div class="relative pt-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="text-sm text-gray-400">System Integration</div>
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
                                        <div class="text-sm text-gray-400">AI Response Time</div>
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
                    </div>

                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-2xl transform rotate-12 backdrop-blur-lg border border-white/10 -z-10">
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-2xl transform -rotate-12 backdrop-blur-lg border border-white/10 -z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <h2 class="text-3xl font-bold text-gray-900">Key Features of Telth Care2Home Solutions</h2>
                <div class="mt-4 w-24 h-[2px] mx-auto bg-gradient-to-r from-blue-200 via-blue-500 to-blue-200"></div>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- 24/7 Data-Driven Remote Monitoring -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-blue-50 to-indigo-50 opacity-50 group-hover:opacity-100 transition duration-500">
                    </div>
                    <div class="relative bg-white p-8">
                        <!-- Feature Header -->
                        <div class="flex items-start space-x-6 mb-8">
                            <div class="relative">
                                <div class="w-16 h-16">
                                    <div
                                        class="absolute inset-0 bg-blue-50 transform rotate-6 transition-transform group-hover:rotate-12">
                                    </div>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-500 transform -rotate-3 transition-transform group-hover:rotate-0">
                                    </div>
                                    <img src="data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M32 8L32 56M8 32H56M20 20L44 44M44 20L20 44' stroke='white' stroke-width='2'/%3E%3C/svg%3E"
                                        class="relative w-16 h-16 p-3" alt="Monitoring Icon" />
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">24/7 Data-Driven Remote Monitoring</h3>
                                <p class="mt-2 text-gray-600">Experience continuous, real-time monitoring with
                                    state-of-the-art IoMT devices.</p>
                            </div>
                        </div>

                        <!-- Feature List -->
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-blue-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Continuous
                                    Heart Rate & ECG Monitoring with rapid arrhythmia detection</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-blue-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Oxygen
                                    Saturation & Blood Pressure Tracking</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-blue-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Sleep Pattern
                                    Analysis for improved health</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Smart Health Devices -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-indigo-50 to-purple-50 opacity-50 group-hover:opacity-100 transition duration-500">
                    </div>
                    <div class="relative h-full bg-white p-8">
                        <div class="flex items-start space-x-6 mb-8">
                            <div class="relative">
                                <div class="w-16 h-16">
                                    <div
                                        class="absolute inset-0 bg-indigo-50 transform rotate-6 transition-transform group-hover:rotate-12">
                                    </div>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-500 transform -rotate-3 transition-transform group-hover:rotate-0">
                                    </div>
                                    <img src="data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M32 16V48M16 32h32M24 16h16M24 48h16' stroke='white' stroke-width='2'/%3E%3C/svg%3E"
                                        class="relative w-16 h-16 p-3" alt="Devices Icon" />
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Smart Health Devices</h3>
                                <p class="mt-2 text-gray-600">Cutting-edge wearables and diagnostic tools for precise
                                    health monitoring.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-indigo-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Smart
                                    Wearables with comprehensive health tracking</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-indigo-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Non-Invasive
                                    Glucose Monitors</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-indigo-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">IoMT-Enabled
                                    Medication Dispensers</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Care Support -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-emerald-50 to-teal-50 opacity-50 group-hover:opacity-100 transition duration-500">
                    </div>
                    <div class="relative bg-white p-8">
                        <div class="flex items-start space-x-6 mb-8">
                            <div class="relative">
                                <div class="w-16 h-16">
                                    <div
                                        class="absolute inset-0 bg-emerald-50 transform rotate-6 transition-transform group-hover:rotate-12">
                                    </div>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-teal-500 transform -rotate-3 transition-transform group-hover:rotate-0">
                                    </div>
                                    <img src="data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M32 16C38.6274 16 44 21.3726 44 28M32 16C25.3726 16 20 21.3726 20 28M32 16V28M44 28C44 34.6274 38.6274 40 32 40M44 28H32M20 28C20 34.6274 25.3726 40 32 40M20 28H32M32 40V52' stroke='white' stroke-width='2'/%3E%3C/svg%3E"
                                        class="relative w-16 h-16 p-3" alt="Care Icon" />
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Professional Care Support</h3>
                                <p class="mt-2 text-gray-600">Expert healthcare professionals providing comprehensive
                                    support.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-emerald-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Virtual
                                    Consultations with specialists</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-emerald-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">At-Home
                                    Nursing Services</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-emerald-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Mental Health
                                    Counseling</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Real-Time Data Reporting -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-violet-50 to-purple-50 opacity-50 group-hover:opacity-100 transition duration-500">
                    </div>
                    <div class="relative bg-white p-8">
                        <div class="flex items-start space-x-6 mb-8">
                            <div class="relative">
                                <div class="w-16 h-16">
                                    <div
                                        class="absolute inset-0 bg-violet-50 transform rotate-6 transition-transform group-hover:rotate-12">
                                    </div>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-violet-500 to-purple-500 transform -rotate-3 transition-transform group-hover:rotate-0">
                                    </div>
                                    <img src="data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16 48L16 24M32 48V16M48 48V32M8 24H24M24 16H40M40 32H56' stroke='white' stroke-width='2'/%3E%3C/svg%3E"
                                        class="relative w-16 h-16 p-3" alt="Data Icon" />
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Real-Time Data Reporting</h3>
                                <p class="mt-2 text-gray-600">Advanced analytics and insights for informed healthcare
                                    decisions.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-violet-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Customizable
                                    Reports with actionable insights</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-violet-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Automated Risk
                                    Alerts & Analysis</span>
                            </div>
                            <div class="flex items-center space-x-4 group/item">
                                <div class="w-2 h-2 bg-violet-500 transform rotate-45"></div>
                                <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors">Seamless EHR
                                    Integration</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
