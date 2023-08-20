@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-blue-400 text-left text-base font-bold text-gray-700 bg-yellow-200 focus:outline-none focus:text-gray-700 focus:bg-indigo-100 focus:border-blue-700 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-bold text-black hover:text-gray-800 hover:bg-yellow-200 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-yellow-300 focus:border-gray-200 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
