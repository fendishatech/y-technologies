@php
    $menuItems = [['url' => route('home'), 'label' => 'Home', 'icon' => 'fa-home'], ['url' => route('orders.index'), 'label' => 'Orders', 'icon' => 'fa-clipboard'], ['url' => route('products.index'), 'label' => 'Products', 'icon' => 'fa-store'], ['url' => route('invoices.index'), 'label' => 'Invoice', 'icon' => 'fa-file-invoice'], ['url' => route('fileShares.index'), 'label' => 'Files', 'icon' => 'fa-share']];
    $adminMenuItems = [['url' => route('designs.index'), 'label' => 'Designs', 'icon' => 'fa-pen-clip'], ['url' => route('users.index'), 'label' => 'Users', 'icon' => 'fa-user'], ['url' => route('customers.index'), 'label' => 'Customers', 'icon' => 'fa-users'], ['url' => route('customers.index'), 'label' => 'Settings', 'icon' => 'fa-cogs']];
@endphp


<div class="py-4">
    {{-- Logo --}}
    <a href="{{ url('home') }}">
        <div class="flex items-center">
            <img class="w-20 h-10" src="/images/logo/y-tech-logo.svg" alt="Logo">
            <span class="hidden md:block text-primary-500 uppercase text-xl font-semibold">Technologies</span>
        </div>
    </a>
    {{-- Links --}}
    <ul class="mt-8">
        @foreach ($menuItems as $item)
            <li
                class="px-6 py-2 flex items-center justify-start text-xl text-primary-800 hover:text-primary-600 hover:bg-gray-200 hover:rounded-l-[18px]">
                <a class="w-full" href="{{ $item['url'] }}"><i class="fa {{ $item['icon'] }} mr-3"
                        aria-hidden="true"></i><span class="hidden sm:inline-flex">{{ $item['label'] }}</span></a>
            </li>
        @endforeach
        @foreach ($adminMenuItems as $item)
            <li
                class="px-6 py-2 flex items-center justify-start text-xl text-primary-800 hover:text-primary-600 hover:bg-gray-200 hover:rounded-l-[18px]">
                <a class="w-full" href="{{ $item['url'] }}"><i class="fa {{ $item['icon'] }} mr-3"
                        aria-hidden="true"></i><span class="hidden sm:inline-flex">{{ $item['label'] }}</span></a>
            </li>
        @endforeach
    </ul>
</div>
