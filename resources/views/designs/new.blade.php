@extends('master.layout')

@section('page_title')
    New Design
@endsection

@section('content')
    <div class="container mx-auto px-6">
        <div class="w-full flex items-center justify-center ">
            <form class="w-full  my-8 rounded-lg bg-white" action="{{ url('/designs') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <h2 class="mt-4 mb-5 px-5 text-3xl font-medium opacity-80 text-gray-600 ">
                    Add New Design
                </h2>

                <div class="px-5 pb-10">
                    @if ($errors->has('custom_error'))
                        <span class="text-sm text-center text-red-400">{{ $errors->first('custom_error') }}</span>
                    @endif

                    @include('designs.partials.new_form')

                    <div class="flex space-x-4">
                        <button type="submit"
                            class="px-6 py-2 mt-8 font-medium text-xl rounded-md opacity-80 bg-primary-700 hover:bg-primary-800 text-gray-100 focus:outline-none">
                            Add Design
                        </button>
                        <a href="{{ route('designs.index') }}"
                            class="px-6 py-2 mt-8 font-medium text-xl rounded-md opacity-80 bg-orange-700 hover:bg-orange-900 text-gray-100 focus:outline-none">
                            Cancel
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
