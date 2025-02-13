@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
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
    </div>
@endsection
