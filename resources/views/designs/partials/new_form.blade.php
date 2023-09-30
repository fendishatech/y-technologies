<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="name" class="text-gray-600 px-1 my-2">Product Name</label>
            <input type="text" name="name" placeholder="Product Name"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('name') }}" />
        </div>
        @if ($errors->has('name'))
            <span class="text-sm text-red-400">{{ $errors->first('name') }}</span>
        @endif
    </div>




    <div class="w-full mb-2">

        <div class="flex flex-col items-start">

            <label class="text-gray-600 px-1 my-2">Design</label>

            <input type="file" name="design" class="border rounded px-3 py-2 text-gray-700 focus:outline-none">

        </div>

        @if ($errors->has('design'))
            <span class="text-sm text-red-400">{{ $errors->first('design') }}</span>
        @endif

    </div>

</div>
