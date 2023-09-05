@extends('master.layout')

@section('page_title')
    Customers
@endsection

@section('content')
    <div class="p-4">
        {{-- Customers table --}}
        <section class="container px-4 mx-auto">
            {{-- Title --}}
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-3xl font-medium text-primary-800 opacity-80">Customers</h2>
                    </div>
                </div>
                <a class="px-6 py-2 text-xl bg-primary-700 opacity-70 rounded-md text-white font-semibold hover:bg-primary-800"
                    href="{{ url('/customers/create') }}">Add New Customer</a>
            </div>
            {{-- Filter/Search --}}
            @include('customers/partials/filter_search')
            {{-- Table --}}
            @include('customers/partials/customers_table')
            {{-- Paginate --}}
            @include('customers/partials/page_links')
        </section>
    </div>
@endsection
