<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="first_name" placeholder="First Name"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('first_name', $client->first_name ?? '') }}" />
    </div>
    @if ($errors->has('first_name'))
        <span class="text-sm text-red-400">{{ $errors->first('first_name') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="father_name" placeholder="Father's Name"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('father_name', $client->father_name ?? '') }}" />
    </div>
    @if ($errors->has('father_name'))
        <span class="text-sm text-red-400">{{ $errors->first('father_name') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="phone_no" placeholder="Phone Number"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('phone_no', $client->phone_no ?? '') }}" />
    </div>
    @if ($errors->has('phone_no'))
        <span class="text-sm text-red-400">{{ $errors->first('phone_no') }}</span>
    @endif
</div>
