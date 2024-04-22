@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center m-2 px-2 pl-15 p-2 border-l-4 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center m-2 px-2 pl-15 p-2 border-l-4 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-700 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
