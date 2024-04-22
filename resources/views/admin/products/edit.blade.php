<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.edit_product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4">{{ __('messages.edit_product') }}</h1>

                    @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif


                    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <x-input-label for="name">{{ __('messages.product_name') }}</x-input-label>
                        <x-text-input id="name" name="nom" :value="old('nom', $product->nom)" class="block mt-1 w-full" />

                        <x-input-label for="details">{{ __('messages.details') }}</x-input-label>
                        <x-text-input id="details" name="details" :value="old('details', $product->details)" class="block mt-1 w-full" />

                        <x-input-label for="price">{{ __('messages.product_price') }}</x-input-label>
                        <x-text-input id="price" name="price" :value="old('price', $product->price)" class="block mt-1 w-full" type="number" step="any" />

                        <x-input-label for="category_id">{{ __('messages.category') }}</x-input-label>
                        <select name="category_id" id="category_id" class="form-select w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <x-input-label for="description">{{ __('messages.description') }}</x-input-label>
                        <x-textarea-input id="description" :value="old('description', $product->description)" />

                        <x-input-label for="weight">{{ __('messages.weight') }}</x-input-label>
                        <x-text-input id="weight" name="weight" :value="old('weight', $product->weight)" class="block mt-1 w-full" type="number" step="any" />

                            <x-input-label for="image">{{ __('messages.image') }}</x-input-label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="image" id="image" accept="image/*">

                        <div class="mt-4">
                            <div class="mb-4">
                                <x-primary-button type="submit">
                                    {{ __('messages.edit') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>