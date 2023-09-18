@extends('master.layout')

@section('page_title')
    Order Detail
@endsection

@section('content')
    <div class="container mx-auto px-6">
        <div class="flex flex-col sm:flex-row justify-between items-center">
            <h1 class="my-8 text-primary-600 text-2xl text-left font-semibold">Order Detail</h1>
            <button class="px-4 py-2 rounded-md bg-primary-800 text-white">Generate QR</button>
        </div>
    </div>
@endsection
