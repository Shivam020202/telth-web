@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <!-- Banner Section -->
    <section class="relative max-h-[75vh] w-full overflow-hidden">
        <!-- Mobile Background (loads only on mobile) -->
        <div class="absolute inset-0 w-full h-full md:hidden">
            <img src="https://img.freepik.com/free-photo/front-view-doctor-holding-stethoscope_23-2148854111.jpg?t=st=1739439623~exp=1739443223~hmac=f2de032472263b4235e5783d8d8de8853c38f90bcb5ce6618a62ec71b3439346&w=2000"
                alt="Mobile background" class="w-full h-full object-cover" loading="lazy" decoding="async">
        </div>

        <!-- Desktop Background (loads only on desktop) -->
        <div class="absolute inset-0 w-full h-full hidden md:block">
            <img src="https://img.freepik.com/free-photo/front-view-doctor-holding-stethoscope_23-2148854111.jpg?t=st=1739439623~exp=1739443223~hmac=f2de032472263b4235e5783d8d8de8853c38f90bcb5ce6618a62ec71b3439346&w=2000"
                alt="Desktop background" class="w-full h-full object-cover" loading="lazy" decoding="async">
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>

        <!-- Content Container -->
        <div class="relative z-10 container mx-auto px-4 h-[75vh] flex flex-col justify-center items-start">
            <!-- Text Content -->
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 animate-fade-in">
                    Welcome to Our Platform
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed">
                    Discover amazing features and services that will transform your business.
                    Join thousands of satisfied customers who have already made the switch.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6">
                    <a href="#"
                        class="group relative inline-block px-8 py-2 bg-violet-600 text-white font-semibold rounded-lg 
                               overflow-hidden transition-all duration-300 transform hover:scale-105
                               hover:shadow-[0_8px_25px_rgba(139,92,246,0.5)] focus:outline-none">
                        <span class="relative z-10">Get Started</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 
                                  transform scale-x-0 transition-transform duration-300 origin-left
                                  group-hover:scale-x-100">
                        </div>
                    </a>
                    <a href="#"
                        class="group relative inline-block px-8 py-2 bg-transparent text-white font-semibold 
                               rounded-lg border-2 border-white overflow-hidden transition-all duration-300
                               hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] transform hover:scale-105
                               focus:outline-none">
                        <span class="relative z-10 group-hover:text-violet-900">Learn More</span>
                        <div
                            class="absolute inset-0 bg-white transform translate-y-full 
                                  transition-transform duration-300 group-hover:translate-y-0">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Motto Section - Subtle top banner -->
    <div class="bg-gradient-to-r from-blue-900 to-blue-800 text-white">
        <div class="container mx-auto py-3 px-4">
            <p class="text-center text-sm font-light tracking-wider">
                "Innovating Today for a Better Tomorrow"
            </p>
        </div>
    </div>

    <section class="w-full py-20">
        <div class="w-full max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-start gap-16">
                <!-- Left Column - About Title -->
                <div class="w-full md:w-1/3">
                    <div class="sticky top-20">
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Since 2012</span>
                        <h2 class="text-3xl font-light text-gray-900 mt-2">About Telth</h2>
                        <div class="h-px w-16 bg-blue-600 mt-6"></div>
                    </div>
                </div>

                <!-- Right Column - About Content -->
                <div class="w-full md:w-2/3">
                    <p class="text-gray-600 leading-relaxed text-lg">
                        At Telth, we are revolutionizing healthcare delivery by harnessing cutting-edge digital technologies
                        to provide personalized, accessible, and innovative care. Since our inception in 2012, Telth has
                        become a trusted partner in transforming healthcare—combining state-of-the-art Internet of Medical
                        Things (IoMT), AI-driven diagnostics powered by our proprietary P3DSC protocol, blockchain-secured
                        data management, and advanced digital solutions to create a seamless, end-to-end care ecosystem.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-lg mt-6">
                        Our comprehensive services range from telemedicine and smart diagnostics to point-of-care testing
                        and home healthcare, empowering patients to take charge of their well-being while equipping
                        providers with the tools for real-time, precision care.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container mx-auto px-4 py-16">
        <!-- Grid Layout for Mission and Vision -->
        <div class="flex flex-col md:flex-row w-full">
            <!-- Mission Section -->
            <div class="w-full md:w-1/2 bg-gray-50 relative">
                <div class="p-16 md:p-24">
                    <span class="text-xs uppercase tracking-widest text-gray-500 mb-4 block">Our Mission</span>
                    <h2 class="text-2xl font-light text-gray-900 mb-8 leading-relaxed">
                        To empower businesses through innovative technology solutions while maintaining the highest
                        standards of excellence and integrity.
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        We strive to create lasting value for our clients, employees, and communities through sustainable
                        practices and forward-thinking approaches.
                    </p>
                </div>
                <!-- Minimal decorative element -->
                <div class="absolute top-0 left-0 w-24 border-t-2 border-l-2 border-gray-900 h-24"></div>
            </div>

            <!-- Vision Section -->
            <div class="w-full md:w-1/2 bg-gray-900 text-white relative">
                <div class="p-16 md:p-24">
                    <span class="text-xs uppercase tracking-widest text-gray-400 mb-4 block">Our Vision</span>
                    <h2 class="text-2xl font-light mb-8 leading-relaxed">
                        To be the global leader in transformative digital solutions, recognized for our commitment to
                        excellence.
                    </h2>
                    <p class="text-gray-400 leading-relaxed">
                        We envision a future where technology enhances human potential and creates positive impact across
                        societies.
                    </p>
                </div>
                <!-- Minimal decorative element -->
                <div class="absolute bottom-0 right-0 w-24 border-b-2 border-r-2 border-white h-24"></div>
            </div>
        </div>

        <!-- Values Strip -->
        <div class="mt-16  mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 mb-2">Innovation</h3>
                        <p class="text-sm text-gray-600">Pushing boundaries with creative solutions</p>
                    </div>

                    <div class="text-center">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 mb-2">Collaboration</h3>
                        <p class="text-sm text-gray-600">Working together towards excellence</p>
                    </div>

                    <div class="text-center">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 mb-2">Integrity</h3>
                        <p class="text-sm text-gray-600">Upholding trust through actions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Telth Section -->
    <section class="w-full bg-gray-900 text-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <h2 class="text-4xl font-light mb-4">Why Choose Telth?</h2>
                <div class="h-1 w-20 bg-blue-500 mx-auto"></div>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Cards -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-400 transform -skew-y-6 opacity-25 group-hover:-skew-y-3 transition-all duration-300">
                    </div>
                    <div class="relative p-8">
                        <div class="text-blue-400 mb-4 text-5xl font-light">01</div>
                        <h3 class="text-xl font-medium mb-4">Comprehensive Care</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Our integrated solutions span telemedicine, real-time monitoring, smart diagnostics, and home
                            healthcare, covering every facet of care delivery.
                        </p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-green-600 to-green-400 transform -skew-y-6 opacity-25 group-hover:-skew-y-3 transition-all duration-300">
                    </div>
                    <div class="relative p-8">
                        <div class="text-green-400 mb-4 text-5xl font-light">02</div>
                        <h3 class="text-xl font-medium mb-4">Advanced Technology</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Leveraging IoMT, AI, blockchain, and digital diagnostics, we provide timely, accurate, and
                            efficient healthcare services.
                        </p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-600 to-purple-400 transform -skew-y-6 opacity-25 group-hover:-skew-y-3 transition-all duration-300">
                    </div>
                    <div class="relative p-8">
                        <div class="text-purple-400 mb-4 text-5xl font-light">03</div>
                        <h3 class="text-xl font-medium mb-4">Patient-Centric Approach</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Designed with patients in mind, our services offer unmatched convenience, real-time insights,
                            and a seamless healthcare experience.
                        </p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-400 transform -skew-y-6 opacity-25 group-hover:-skew-y-3 transition-all duration-300">
                    </div>
                    <div class="relative p-8">
                        <div class="text-red-400 mb-4 text-5xl font-light">04</div>
                        <h3 class="text-xl font-medium mb-4">Trusted Partnership</h3>
                        <p class="text-gray-300 leading-relaxed">
                            With over a decade of proven excellence, Telth is a reliable partner for healthcare providers
                            and patients worldwide.
                        </p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-yellow-400 transform -skew-y-6 opacity-25 group-hover:-skew-y-3 transition-all duration-300">
                    </div>
                    <div class="relative p-8">
                        <div class="text-yellow-400 mb-4 text-5xl font-light">05</div>
                        <h3 class="text-xl font-medium mb-4">Global Reach</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Our innovative solutions transcend borders, making advanced healthcare accessible to communities
                            around the globe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Core Values Section -->
    <section class="w-full bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <h2 class="text-4xl font-light text-gray-900 mb-4">Core Values</h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto"></div>
            </div>

            <!-- Values Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Innovation -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 ml-4">Innovation</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        We relentlessly integrate emerging technologies to keep healthcare practices ahead of the curve.
                    </p>
                </div>

                <!-- Accessibility -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center group-hover:bg-green-600 transition-colors duration-300">
                            <svg class="w-6 h-6 text-green-600 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 ml-4">Accessibility</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        We believe high-quality healthcare should be available and affordable for everyone, irrespective of
                        location.
                    </p>
                </div>

                <!-- Compassion -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center group-hover:bg-red-600 transition-colors duration-300">
                            <svg class="w-6 h-6 text-red-600 group-hover:text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 ml-4">Compassion</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Our solutions are designed to enhance the human experience in healthcare, ensuring every patient
                        feels valued and cared for.
                    </p>
                </div>

                <!-- Collaboration -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center group-hover:bg-purple-600 transition-colors duration-300">
                            <svg class="w-6 h-6 text-purple-600 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 ml-4">Collaboration</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        We partner closely with healthcare professionals, patients, and industry leaders to develop
                        holistic, integrated care solutions.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:bg-yellow-600 transition-colors duration-300">
                            <svg class="w-6 h-6 text-yellow-600 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 ml-4">Integrity</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        We uphold the highest standards of ethics and transparency, fostering trust among all our
                        stakeholders.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="w-full bg-gray-50 py-20">
        <div class="w-full max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-start gap-16">
                <!-- Left Column - Partners Title -->
                <div class="w-full md:w-1/3">
                    <div class="sticky top-20">
                        <h2 class="text-3xl font-light text-gray-900">Our Partners</h2>
                        <div class="h-px w-16 bg-blue-600 mt-6"></div>
                    </div>
                </div>

                <!-- Right Column - Partners Content -->
                <div class="w-full md:w-2/3">
                    <p class="text-gray-600 mb-8 text-lg">
                        Telth's groundbreaking work is bolstered by strategic collaborations across multiple sectors:
                    </p>

                    <!-- Partners Grid -->
                    <div class="space-y-12">
                        <!-- Government -->
                        <div class="border-l-2 border-gray-200 pl-8">
                            <h3 class="text-xl font-medium text-gray-900 mb-3">Government</h3>
                            <p class="text-gray-600 leading-relaxed">
                                We have established key partnerships with national governments in Ghana, Senegal, Nigeria,
                                and with major Indian states including Himachal Pradesh, Uttarakhand, and Tamil Nadu,
                                ensuring our solutions address diverse healthcare challenges globally.
                            </p>
                        </div>

                        <!-- Industry -->
                        <div class="border-l-2 border-gray-200 pl-8">
                            <h3 class="text-xl font-medium text-gray-900 mb-3">Industry</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Our alliances with major corporations such as the Alfardan Group (MENA) and LabAid
                                (Bangladesh) enable us to integrate advanced technology and expand our market reach.
                            </p>
                        </div>

                        <!-- Academia -->
                        <div class="border-l-2 border-gray-200 pl-8">
                            <h3 class="text-xl font-medium text-gray-900 mb-3">Academia</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Collaborating with renowned institutions like Johns Hopkins, Harvard, CUCOM, and Periyar
                                University (under the DST SATHI initiative) ensures that our solutions are backed by
                                cutting-edge research and innovation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="w-full py-24">
        <div class="max-w-[1500px] mx-auto px-6">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl font-light text-gray-900 mb-6">Board of Directors & Executives</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Our leadership is the cornerstone of Telth's success, driving innovation and ensuring excellence in
                    healthcare delivery.
                </p>
                <div class="h-1 w-20 bg-blue-600 mx-auto mt-8"></div>
            </div>

            <!-- Leadership Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dr. Ramanathan Raju -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-blue-600 to-blue-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Dr. Ramanathan Raju</h3>
                                    <p class="text-blue-600 font-medium mt-1">President and Chief Mentor, Network
                                        Operations</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                A highly esteemed healthcare administrator and technology adviser, Dr. Raju serves as the
                                Chairman of the Board at RIMS Lab – HC. Recognized as one of the "100 Most-Influential
                                People in Healthcare" in the USA.
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                Top 25 Minority Executives in Healthcare
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Alex Ephrem -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-green-600 to-green-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Dr. Alex Ephrem</h3>
                                    <p class="text-green-600 font-medium mt-1">President and Chief Mentor, International
                                        Digital Health Park</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                An accomplished academic administrator with global experience spanning the United States and
                                the Caribbean. Founding member of Telth's Medical Education and Research division.
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                International Healthcare Expert
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Saravanan Babu -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-yellow-600 to-yellow-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Dr. Saravanan Babu</h3>
                                    <p class="text-yellow-600 font-medium mt-1">Mentor – Strategies, Employee Training,
                                        Investments and Operations</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                A visionary healthcare futurist with experience at organizations like the World Bank, United
                                Nations, IMF, and IFC. Passionate about reforming the healthcare and wellness industry.
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Global Healthcare Strategist
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vinay Preet Singh -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-red-600 to-red-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Vinay Preet Singh</h3>
                                    <p class="text-red-600 font-medium mt-1">Director & Founding Member, President – India
                                        Operations</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                With extensive experience advising Fortune 500 companies and a strong commitment to public
                                service, leads market expansion in India. Strategic acumen in policy making and public
                                affairs.
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                </svg>
                                Market Expansion Leader
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Raja K. -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-purple-600 to-purple-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Dr. Raja K.</h3>
                                    <p class="text-purple-600 font-medium mt-1">Chief Technology Officer & Healthcare
                                        Futurist</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                A serial entrepreneur and pioneering healthcare innovator, driving the development of
                                precise data-driven digital care protocols (P3DC and P3DSC). Inventor of Telth and the Telth
                                HES Box.
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Pioneer in Healthcare Technology
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Angel Sharan (continued) -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-indigo-600 to-indigo-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Angel Sharan</h3>
                                    <p class="text-indigo-600 font-medium mt-1">Chief Research Officer & Network Business
                                        Strategist</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Healthcare Futurist and Young Scientist Award winner. Patent architect behind the Telth
                                Network, leading research on Root Cloud and Telth Wireless Body Area Network (TWBAN).
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                                Research Pioneer
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Pooja Subbarao -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <div class="h-3 bg-gradient-to-r from-pink-600 to-pink-400"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Dr. Pooja Subbarao</h3>
                                    <p class="text-pink-600 font-medium mt-1">ACTO (P3DSC) and Junior Trustee</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-pink-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                An enterprising healthcare professional and educator with experience from Harvard Medical
                                School and Massachusetts General Hospital. Crucial role in quality assurance and research.
                            </p>
                            <div class="mt-6 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Quality Assurance Leader
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More directors here... -->
            </div>

            <!-- Call to Action -->
            <div class="mt-24 bg-gray-900 rounded-3xl overflow-hidden">
                <div class="relative px-8 py-16 md:p-16">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-10"></div>
                    <div class="relative z-10 max-w-3xl mx-auto text-center">
                        <h3 class="text-3xl font-light text-white mb-6">Join Us in Shaping the Future of Healthcare</h3>
                        <p class="text-gray-300 text-lg leading-relaxed mb-8">
                            Step into a new era where technology meets compassion. Whether you're a patient seeking
                            convenient, data-driven care or a healthcare provider looking to leverage the latest in
                            diagnostic and treatment tools, Telth is here to support you every step of the way.
                        </p>
                        <a href="#"
                            class="inline-block px-8 py-4 bg-white text-gray-900 rounded-lg font-medium hover:bg-gray-100 transition-colors duration-200">
                            Join Our Journey
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
