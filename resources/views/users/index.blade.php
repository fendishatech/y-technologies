@extends('master.layout')

@section('page_title')
    Orders
@endsection

@section('content')
    <div class="p-4">
        {{-- Orders table --}}
        <section class="container px-4 mx-auto">
            {{-- Title --}}
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-3xl font-medium text-primary-800 opacity-80">Orders</h2>
                    </div>
                </div>
                <a class="px-6 py-2 text-xl bg-primary-700 opacity-70 rounded-md text-white font-semibold hover:bg-primary-800"
                    href="{{ url('/orders/create') }}">Add New Order</a>
            </div>
            {{-- Filter/Search --}}
            @include('orders/partials/filter_search')
            {{-- Table --}}
            @include('orders/partials/orders_table')
            {{-- Paginate --}}
            @include('orders/partials/page_links')
        </section>
    </div>
@endsection
