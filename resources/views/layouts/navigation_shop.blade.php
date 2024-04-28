<div class="bg-white" x-data="{ isOpen: false }">
    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div x-show="isOpen" class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div x-show="isOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

        <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
        <div x-show="isOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
            <div class="px-4 pt-5 pb-2 flex">
                <button type="button" @click="isOpen = false" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                    </div>
                </div>

                <!-- 'Women' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>
                    </div>
                </div>

                <!-- 'Men' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
                </div>

                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <!-- Currency selector -->
                <form>
                    <div class="inline-block">
                        <label for="mobile-currency" class="sr-only">Currency</label>
                        <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                            <select id="mobile-currency" name="currency" class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">
                                <option>CAD</option>

                                <option>USD</option>

                                <option>AUD</option>

                                <option>EUR</option>

                                <option>GBP</option>
                            </select>
                            <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="relative bg-gray-900">
    <!-- Decorative image and overlay -->
    <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-hero-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>
    <header class="relative z-10">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-gray-900">
                <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                    <!-- Currency selector -->
                    <form>
                        <div>
                            <label for="desktop-currency" class="sr-only">Currency</label>
                            <div class="-ml-2 group relative bg-gray-900 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                <select id="desktop-currency" name="currency" class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">
                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>
                                </select>
                                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="flex items-center space-x-6">
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                    </div>
                </div>
            </div>

            <!-- Secondary navigation -->
            <div class="backdrop-blur-md backdrop-filter bg-opacity-10 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div>
                        <div class="h-16 flex items-center justify-between">
                            <!-- Logo (lg+) -->
                            <div class="hidden lg:flex-1 lg:flex lg:items-center">
                                <a href="/">
                                    <span class="sr-only">Workflow</span>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="">
                                </a>
                            </div>

                            <div class="hidden h-full lg:flex">
                                <!-- Flyout menus -->
                                <div class="px-4 bottom-0 inset-x-0" x-data="{ firstIsOpen: false, secondIsOpen: false }">
                                    <div class="h-full flex justify-center space-x-8">
                                        <div class="flex">
                                            <div class="relative flex">
                                                <button type="button" @click="firstIsOpen = !firstIsOpen; secondIsOpen = false" class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white" aria-expanded="false">
                                                    Women
                                                    <!-- Open: "bg-white", Closed: "" -->
                                                    <span :class="{ 'bg-white': firstIsOpen }" class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200" aria-hidden="true"></span>
                                                </button>
                                            </div>

                                            <!--
                      'Women' flyout menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                                            <div x-show="firstIsOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-full inset-x-0 text-sm text-gray-500">
                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                                <div class="relative bg-white">
                                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                        <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    New Arrivals
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>

                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    Basic Tees
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>

                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    Accessories
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>

                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    Carry
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="relative flex">
                                                <button type="button" @click="secondIsOpen = !secondIsOpen; firstIsOpen = false" class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white" aria-expanded="false">
                                                    Men
                                                    <!-- Open: "bg-white", Closed: "" -->
                                                    <span :class="{ 'bg-white': secondIsOpen }" class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200" aria-hidden="true"></span>
                                                </button>
                                            </div>

                                            <!--
                      'Women' flyout menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                                            <div x-show="secondIsOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-full inset-x-0 text-sm text-gray-500">
                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                                <div class="relative bg-white">
                                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                        <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    New Arrivals
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>

                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    Basic Tees
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>

                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    Accessories
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>

                                                            <div class="group relative">
                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">
                                                                </div>
                                                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                    Carry
                                                                </a>
                                                                <p aria-hidden="true" class="mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#" class="flex items-center text-sm font-medium text-white">Company</a>

                                        <a href="#" class="flex items-center text-sm font-medium text-white">Stores</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile menu and search (lg-) -->
                            <div class="flex-1 flex items-center lg:hidden">
                                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                <button type="button" class="-ml-2 p-2 text-white" @click="isOpen = !isOpen">
                                    <span class="sr-only">Open menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>

                                <!-- Search -->
                                <a href="#" class="ml-2 p-2 text-white">
                                    <span class="sr-only">Search</span>
                                    <!-- Heroicon name: outline/search -->
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Logo (lg-) -->
                            <a href="#" class="lg:hidden">
                                <span class="sr-only">Workflow</span>
                                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="" class="h-8 w-auto">
                            </a>

                            <div class="flex-1 flex items-center justify-end">
                                <a href="#" class="hidden text-sm font-medium text-white lg:block"> Search </a>

                                <div class="flex items-center lg:ml-8">
                                    <!-- Help -->
                                    <a href="#" class="p-2 text-white lg:hidden">
                                        <span class="sr-only">Help</span>
                                        <!-- Heroicon name: outline/question-mark-circle -->
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="hidden text-sm font-medium text-white lg:block">Help</a>

                                    <!-- Cart -->
                                    <div class="ml-4 flow-root lg:ml-8">
                                        <a href="#" class="group -m-2 p-2 flex items-center">
                                            <!-- Heroicon name: outline/shopping-bag -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                            <span class="ml-2 text-sm font-medium text-white">0</span>
                                            <span class="sr-only">items in cart, view bag</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="relative mx-auto flex max-w-3xl flex-col items-center py-32 px-6 text-center sm:py-64 lg:px-0">
        <h1 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">New arrivals are here</h1>
        <p class="mt-4 text-xl text-white">The new arrivals have, well, newly arrived. Check out the latest options from our summer small-batch release while they're still in stock.</p>
        <a href="#" class="mt-8 inline-block rounded-md border border-transparent bg-white py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100">Shop New Arrivals</a>
    </div>
</div>