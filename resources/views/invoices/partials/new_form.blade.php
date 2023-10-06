<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="name" class="text-gray-600 px-1 my-2">Invoice Name</label>
            <input type="text" name="name" placeholder="Invoice Name"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('name') }}" />
        </div>
        @if ($errors->has('name'))
            <span class="text-sm text-red-400">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="quantity" class="text-gray-600 px-1 my-2">Quantity</label>
            <input type="number" name="quantity" placeholder="Quantity"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('quantity') }}" />
        </div>
        @if ($errors->has('quantity'))
            <span class="text-sm text-red-400">{{ $errors->first('quantity') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="desc" class="text-gray-600 px-1 my-2">Description</label>
            <textarea name="desc" placeholder="Description"
                class="w-full h-24 border rounded px-3 py-2 text-gray-700 focus:outline-none">{{ old('desc') }}</textarea>
        </div>
        @if ($errors->has('desc'))
            <span class="text-sm text-red-400">{{ $errors->first('desc') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="price" class="text-gray-600 px-1 my-2">Price</label>
            <input type="number" name="price" step="0.01" placeholder="Price"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('price') }}" />
        </div>
        @if ($errors->has('price'))
            <span class="text-sm text-red-400">{{ $errors->first('price') }}</span>
        @endif
    </div>
</div>
