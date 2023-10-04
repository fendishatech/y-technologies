@extends('master.layout')

@section('page_title')
    Home
@endsection

@section('content')
    <section class="container mx-auto my-8 px-6">
        <h1 class="text-2xl text-gray-500 font-semibold">Stats</h1>
        @include('home.partials.stats')
    </section>
    <section class="container mx-auto px-6">
        <div class="mt-8 mb-24">
            <h1 class="text-2xl text-gray-500 font-semibold">Orders Table</h1>
            @include('home.partials.orders_table')
        </div>
    </section>
@endsection
