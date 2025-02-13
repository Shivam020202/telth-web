{{-- resources/views/components/directory-strip.blade.php --}}

@php
    // Get current URL path and split into segments
    $path = request()->path();
    $segments = array_filter(explode('/', $path));

    // Build up the paths for each segment
    $buildPath = '';
    $breadcrumbs = [];

    foreach ($segments as $segment) {
        $buildPath .= '/' . $segment;
        $breadcrumbs[] = [
            'name' => ucwords(str_replace('-', ' ', $segment)),
            'path' => $buildPath,
        ];
    }
@endphp

<nav aria-label="Directory path" class="bg-gray-100 px-4 max-w-[1500px] mx-auto py-2 rounded-lg ">
    <ol class="flex flex-wrap items-center gap-2 text-xs">
        {{-- Home link --}}
        <li>
            <a href="/"
                class="text-gray-600 hover:text-blue-800 transition-colors duration-200 flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Home</span>
            </a>
        </li>

        {{-- Separator for home --}}
        @if (count($breadcrumbs) > 0)
            <li class="text-gray-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
        @endif

        {{-- Dynamic segments --}}
        @foreach ($breadcrumbs as $index => $breadcrumb)
            <li>
                @if ($index === count($breadcrumbs) - 1)
                    {{-- Current page (not clickable) --}}
                    <span class="text-gray-600 font-medium">{{ $breadcrumb['name'] }}</span>
                @else
                    {{-- Clickable path --}}
                    <a href="{{ $breadcrumb['path'] }}"
                        class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                        {{ $breadcrumb['name'] }}
                    </a>

                    {{-- Separator --}}
                    <span class="text-gray-500 ml-2">
                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
