<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.edit_order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4"> {{ __('messages.edit_order') }}</h1>

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


                    <form action="{{ route('orders.update', $commande) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <x-input-label class="" for="payment_status">{{ __('messages.product_name') }}</x-input-label>
                        <x-text-input type="text" class="form-control" name="payment_status" placeholder="payment_status" value="{{ old('payment_status') }}" />


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