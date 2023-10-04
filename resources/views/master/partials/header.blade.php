@php
    $links = [['url' => route('home'), 'text' => 'Home'], ['url' => route('orders.index'), 'text' => 'Orders'], ['url' => route('products.index'), 'text' => 'Products'], ['url' => route('invoices.index'), 'text' => 'Invoice'], ['url' => route('fileShares.index'), 'text' => 'Files'], ['url' => route('designs.index'), 'text' => 'Designs'], ['url' => route('users.index'), 'text' => 'Users'], ['url' => route('customers.index'), 'text' => 'Customers']];
@endphp


<header>
    <nav class="container mx-auto px-6 py-4 relative">

        <div class="flex items-center justify-end">
            {{-- Actions --}}

            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Dropdown hover <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownHover"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>

            {{-- <form class="hidden md:flex" action="{{ url('logout') }}" method="POST">
                @csrf
                <button type="submit" class="cta-btn-primary">Logout</button>
            </form> --}}


        </div>
    </nav>
</header>
