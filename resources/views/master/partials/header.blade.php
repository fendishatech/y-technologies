@php
    $links = [['url' => route('home'), 'text' => 'Home'], ['url' => route('orders.index'), 'text' => 'Orders'], ['url' => route('products.index'), 'text' => 'Products'], ['url' => route('invoices.index'), 'text' => 'Invoice'], ['url' => route('fileShares.index'), 'text' => 'Files'], ['url' => route('designs.index'), 'text' => 'Designs'], ['url' => route('users.index'), 'text' => 'Users'], ['url' => route('customers.index'), 'text' => 'Customers']];
@endphp


<header class="bg-gray-200">
    {{-- <nav class="container mx-auto px-6 py-4 relative"> --}}

    {{-- <div class="flex items-center justify-end"> --}}
    {{-- Actions --}}
    {{-- @if (Session::get('user'))
                <div id="profile-menu" class="cursor-pointer flex items-baseline space-x-4">
                    <p class="text-primary-500 text-xl">Welcome, {{ Session::get('user')['first_name'] }}
                        {{ Session::get('user')['last_name'] }}</p>
                    <i class="fa fa-ellipsis-v text-primary-700 text-xl"></i>
                </div>
            @endif --}}

    {{-- <form class="hidden md:flex" action="{{ url('logout') }}" method="POST">
                @csrf
                <button type="submit" class="cta-btn-primary">Logout</button>
            </form> --}}


    {{-- </div> --}}
    {{-- </nav> --}}
    <!-- Profile dropdown -->
    <div class="relative inline-block text-left">
        <div>
            <button type="button"
                class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border rounded-md hover:bg-gray-50 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:bg-gray-200"
                id="userMenuButton" aria-expanded="true" aria-haspopup="true">
                Welcome, {{ Session::get('user')['first_name'] }}
                <!-- Add a dropdown icon here -->
            </button>
        </div>
        <!-- Dropdown menu -->
        <div class="absolute right-0 mt-2 origin-top-right bg-white border border-gray-300 divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
            role="menu" aria-orientation="vertical" aria-labelledby="userMenuButton">
            <!-- User Profile Link -->
            <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                role="menuitem">Profile</a>

            <!-- Change Password Link -->
            <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                role="menuitem">Change
                Password</a>

            <!-- Logout Link -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-full px-4 py-2 text-sm text-gray-700 text-left hover:bg-gray-100"
                    role="menuitem">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>
