<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Customer</label>
            <select name="customer_id" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                        {{ $customer->first_name }} {{ $customer->last_name }} </option>
                @endforeach
            </select>
        </div>
        @if ($errors->has('customer_id'))
            <span class="text-sm text-red-400">{{ $errors->first('customer_id') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Order Id</label>
            <input type="text" name="order_no" placeholder="Order Number"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('order_no') }}" />
        </div>
        @if ($errors->has('order_no'))
            <span class="text-sm text-red-400">{{ $errors->first('order_no') }}</span>
        @endif
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="material" class="text-gray-600 px-1 my-2">Material Type</label>
            <select name="material" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none">
                <option value="Material One" {{ old('material') == 'Material One' ? 'selected' : '' }}>Material One
                </option>
                <option value="Material Two" {{ old('material') == 'Material Two' ? 'selected' : '' }}>Material Two
                </option>
            </select>
        </div>
        @if ($errors->has('material'))
            <span class="text-sm text-red-400">{{ $errors->first('material') }}</span>
        @endif
    </div>


    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="thickness" class="text-gray-600 px-1 my-2">Thickness</label>
            <select name="thickness" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none">
                <option value="3" {{ old('thickness') == '3' ? 'selected' : '' }}>3</option>
                <option value="6" {{ old('thickness') == '6' ? 'selected' : '' }}>6</option>
                <option value="9" {{ old('thickness') == '9' ? 'selected' : '' }}>9</option>
            </select>
        </div>
        @if ($errors->has('thickness'))
            <span class="text-sm text-red-400">{{ $errors->first('thickness') }}</span>
        @endif
    </div>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="width" class="text-gray-600 px-1 my-2">Width</label>
            <input type="number" name="width" placeholder="Width"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('width') }}" />
        </div>
        @if ($errors->has('width'))
            <span class="text-sm text-red-400">{{ $errors->first('width') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="height" class="text-gray-600 px-1 my-2">Height</label>
            <input type="number" name="height" placeholder="Height"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('height') }}" />
        </div>
        @if ($errors->has('height'))
            <span class="text-sm text-red-400">{{ $errors->first('height') }}</span>
        @endif
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Quantity</label>
            <input type="number" name="quantity" placeholder="Quantity"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('quantity') }}" />
        </div>
        @if ($errors->has('quantity'))
            <span class="text-sm text-red-400">{{ $errors->first('quantity') }}</span>
        @endif
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Item Name</label>
            <input type="text" name="item_name" placeholder="Item Name"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('item_name') }}" />
        </div>
        @if ($errors->has('item_name'))
            <span class="text-sm text-red-400">{{ $errors->first('item_name') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Item Id</label>
            <input type="text" name="item_id" placeholder="Item ID"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('item_id') }}" />
        </div>
        @if ($errors->has('item_id'))
            <span class="text-sm text-red-400">{{ $errors->first('item_id') }}</span>
        @endif
    </div>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Total Price</label>
            <input type="number" step="0.01" name="price" placeholder="Price"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('price') }}" />
        </div>
        @if ($errors->has('price'))
            <span class="text-sm text-red-400">{{ $errors->first('price') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="customer_id" class="text-gray-600 px-1 my-2">Pre Pay</label>
            <input type="number" step="0.01" name="prepay" placeholder="Prepay"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('prepay') }}" />
        </div>
        @if ($errors->has('prepay'))
            <span class="text-sm text-red-400">{{ $errors->first('prepay') }}</span>
        @endif
    </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">

    <div class="w-full mb-2">
        {{-- @if ($order->design_img) --}}
        <img class="hidden" id="imagePreview" src="#" alt="Image Preview">
        {{-- @endif --}}
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="design" class="text-gray-600 px-1 my-2">Design File</label>
            <input id="imageInput" accept="image/*"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" type="file"
                name="design">

        </div>
        @if ($errors->has('design'))
            <span class="text-sm text-red-400">{{ $errors->first('design') }}</span>
        @endif
    </div>
</div>

<script>
    // Get references to the input and image elements
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');

    // Add an event listener to the input element
    imageInput.addEventListener('change', function() {
        const selectedFile = imageInput.files[0]; // Get the selected file

        if (selectedFile) {
            // Create a FileReader to read the selected file
            const reader = new FileReader();

            // Set up an event listener for when the FileReader has loaded the file
            reader.onload = function(e) {
                // Set the src attribute of the image element to the data URL
                imagePreview.src = e.target.result;

                // Show the image preview element
                imagePreview.classList.remove('hidden');
                // imagePreview.style.display = 'block';
            };

            // Read the file as a data URL
            reader.readAsDataURL(selectedFile);
        } else {
            // If no file is selected, hide the image preview
            imagePreview.src = '';
            imagePreview.style.display = 'none';
        }
    });
</script>
