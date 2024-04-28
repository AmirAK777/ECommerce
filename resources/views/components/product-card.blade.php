<!-- Composant ProductCard.blade.php -->

@props(['product'])

<div class="group relative">
    <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
        <img src="images/{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-center object-cover">
    </div>
    <h3 class="mt-4 text-sm text-gray-700">
        <a href="{{ route('shop.item', $product) }}">
            <span class="absolute inset-0"></span>
            {{ $product->name }}
        </a>
    </h3>
    <p class="mt-1 text-sm text-gray-500">{{ $product->category->name }}</p>
    <p class="mt-1 text-sm font-medium text-gray-900">${{ $product->price }}</p>
</div>
