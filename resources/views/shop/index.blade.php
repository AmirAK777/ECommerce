<x-shop-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Trending products</h2>
                <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">Shop the collection<span aria-hidden="true"> &rarr;</span></a>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                @foreach ($products as $product)
                <x-product-card :product="$product" />
                @endforeach
            </div>

            <div class="mt-8 text-sm md:hidden">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Shop the collection<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </div>


        <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:max-w-7xl xl:mx-auto xl:px-8">
            <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Category</h2>
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
            </div>

            <div class="mt-4 flow-root">
                <div class="-my-2">
                    <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                        <div class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-5 xl:gap-x-8">
                            @foreach($categories as $category)
                            <x-category-card :image="$category->image" :name="$category->name" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 px-4 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </section>
    </div>

</x-shop-layout>