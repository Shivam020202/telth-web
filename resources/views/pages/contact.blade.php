@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container mx-auto py-12 px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="bg-white rounded-lg shadow-md">
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h1 class="text-2xl font-semibold text-gray-800">Contact Us</h1>
                    </div>

                    <div class="p-6">
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Get in Touch</h2>
                            <p class="text-gray-600">We're here to help and answer any question you might have. We look
                                forward to hearing from you.</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-6">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-700 mb-2">Visit Us</h3>
                                    <p class="text-gray-600">
                                        123 Example Street<br>
                                        City, State 12345
                                    </p>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-gray-700 mb-2">Contact Info</h3>
                                    <div class="space-y-2">
                                        <p class="text-gray-600">
                                            <span class="font-medium">Email:</span><br>
                                            <a href="mailto:contact@example.com"
                                                class="text-blue-600 hover:text-blue-800 hover:underline">
                                                contact@example.com
                                            </a>
                                        </p>
                                        <p class="text-gray-600">
                                            <span class="font-medium">Phone:</span><br>
                                            (555) 123-4567
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <h3 class="text-lg font-medium text-gray-700 mb-4">Business Hours</h3>
                                    <div class="space-y-2">
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Monday - Friday:</span>
                                            <span class="text-gray-800">9:00 AM - 5:00 PM</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Saturday - Sunday:</span>
                                            <span class="text-gray-800">Closed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
