<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="first_name" placeholder="First Name"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('first_name', $customer->first_name ?? '') }}" />
    </div>
    @if ($errors->has('first_name'))
        <span class="text-sm text-red-400">{{ $errors->first('first_name') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="last_name" placeholder="Last Name"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('last_name', $customer->last_name ?? '') }}" />
    </div>
    @if ($errors->has('last_name'))
        <span class="text-sm text-red-400">{{ $errors->first('last_name') }}</span>
    @endif
</div>
{{-- Email --}}
<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="email" placeholder="Your Email"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('email', $customer->email ?? '') }}" />
    </div>
    @if ($errors->has('email'))
        <span class="text-sm text-red-400">{{ $errors->first('email') }}</span>
    @endif
</div>
{{-- Phone No --}}
<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="phone_no" placeholder="Phone Number"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
            value="{{ old('phone_no', $customer->phone_no ?? '') }}" />
    </div>
    @if ($errors->has('phone_no'))
        <span class="text-sm text-red-400">{{ $errors->first('phone_no') }}</span>
    @endif
</div>
