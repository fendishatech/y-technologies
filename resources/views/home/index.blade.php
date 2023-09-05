@extends('master.layout')

@section('page_title')
    Home
@endsection

@section('content')
    <section class="container mx-auto px-6">
        <h1 class="text-2xl text-gray-500 font-semibold">Stats</h1>
        @include('home.partials.stats')
    </section>
    <section class="container mx-auto px-6">
        <div class="mt-8 mb-24">
            <h1 class="text-2xl text-gray-500 font-semibold">Orders Table</h1>
            @include('home.partials.orders_table')
            <div class="flex justify-between">
                <h1 class="mt-4 text-2xl text-gray-500 font-semibold">Customers Table</h1>
                <a href="{{ route('customers.index') }}">View More</a>
            </div>
            @include('home.partials.customers_table')
            <h1 class="mt-4 text-2xl text-gray-500 font-semibold">Users Table</h1>
            @include('home.partials.users_table')
        </div>
    </section>
@endsection
