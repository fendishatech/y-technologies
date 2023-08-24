@extends('master.layout')

@section('page_title')
    Home
@endsection

@section('content')
    <section class="container mx-auto px-6">
        <div class="my-24">
            <h1 class="text-2xl text-gray-500 font-semibold">Users table</h1>
            @include('home.partials.table')
        </div>
    </section>
@endsection
