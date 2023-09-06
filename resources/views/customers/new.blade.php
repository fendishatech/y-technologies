@extends('master.layout')

@section('page_title')
    New Customer
@endsection

@section('content')
    <div class="p-4">
        <div class="w-full flex items-center justify-center bg-slate-100">
            <form class="w-full  my-8 rounded-lg bg-white" action="{{ url('/clients') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <h2 class="mt-4 mb-5 px-5 text-3xl font-medium opacity-80 text-yellow-800 ">
                    Add New Client
                </h2>

                <div class="px-5 pb-10">
                    @if ($errors->has('custom_error'))
                        <span class="text-sm text-center text-red-400">{{ $errors->first('custom_error') }}</span>
                    @endif

                    @include('customers.partials.customers_form')

                    <div class="flex space-x-4">
                        <button type="submit"
                            class="px-6 py-2 mt-8 font-medium text-xl rounded-md opacity-80 bg-yellow-700 hover:bg-yellow-800 text-gray-100 focus:outline-none">
                            Add Client
                        </button>
                        <a href="{{ route('clients.index') }}"
                            class="px-6 py-2 mt-8 font-medium text-xl rounded-md opacity-80 bg-red-800 hover:bg-red-900 text-gray-100 focus:outline-none">
                            Cancel
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
