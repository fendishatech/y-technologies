@extends('master.layout')

@section('page_title')
    New Customer
@endsection

@section('content')
    <form action="{{ url('/customers/create') }}" method="POST">
        @csrf
        <h1>Add New Customer</h1>
    </form>
@endsection
