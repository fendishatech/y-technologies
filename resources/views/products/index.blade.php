@extends('master.layout')

@section('page_title')
    Products
@endsection

@section('content')
    <div class="p-4">
        {{-- Products table --}}
        <section class="container px-4 mx-auto">
            {{-- Title --}}
            <div
                class="flex flex-col-reverse gap-y-4 justify-left sm:flex-row sm:gap-y-0  sm:items-center sm:justify-between">
                <a class="px-6 py-2 text-xl bg-primary-700 opacity-70 rounded-md text-white font-semibold hover:bg-primary-800"
                    href="{{ url('/products/create') }}">Add New Product</a>
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-3xl font-medium text-primary-800 opacity-80">Products</h2>
                    </div>
                </div>
            </div>
            {{-- Filter/Search --}}
            @include('products/partials/filter_search')
            {{-- Table --}}
            @include('products/partials/table')
            {{-- Paginate --}}
            @include('products/partials/page_links')
        </section>
    </div>
@endsection
