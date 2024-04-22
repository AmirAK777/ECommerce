<div class="grid grid-flow-row auto-rows-max">
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        @role('admin')
            <x-side-nav-link :href="route('dashboard')" :active="request()->routeIs('admin.dashboard')">
                {{ __('Dashboard') }}
            </x-side-nav-link>
        @endrole
    </div>

    @role('admin')
    
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-side-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
                {{ __('messages.product_list') }}
            </x-side-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-side-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                {{ __('messages.category_list') }}
            </x-side-nav-link>
        </div>
    @endrole
</div>
