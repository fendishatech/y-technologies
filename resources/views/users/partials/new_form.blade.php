<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="first_name" class="text-gray-600 px-1 my-2">First Name</label>
            <input type="text" name="first_name" placeholder="First Name"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('first_name') }}" />
        </div>
        @if ($errors->has('first_name'))
            <span class="text-sm text-red-400">{{ $errors->first('first_name') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="last_name" class="text-gray-600 px-1 my-2">Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('last_name') }}" />
        </div>
        @if ($errors->has('last_name'))
            <span class="text-sm text-red-400">{{ $errors->first('last_name') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="email" class="text-gray-600 px-1 my-2">Email</label>
            <input type="email" name="email" placeholder="Email"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('email') }}" />
        </div>
        @if ($errors->has('email'))
            <span class="text-sm text-red-400">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="phone_no" class="text-gray-600 px-1 my-2">Phone Number</label>
            <input type="text" name="phone_no" placeholder="Phone Number"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                value="{{ old('phone_no') }}" />
        </div>
        @if ($errors->has('phone_no'))
            <span class="text-sm text-red-400">{{ $errors->first('phone_no') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="password" class="text-gray-600 px-1 my-2">Password</label>
            <input type="password" name="password" placeholder="Password"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
        </div>
        @if ($errors->has('password'))
            <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="password_confirmation" class="text-gray-600 px-1 my-2">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
        </div>
    </div>

    <div class="w-full mb-2">
        <div class="flex flex-col items-start">
            <label for="role" class="text-gray-600 px-1 my-2">Role</label>
            <select name="role" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none">
                <option value="admin">Admin</option>
                <option value="store">Store</option>
                <option value="employee">Employee</option>
            </select>
        </div>
        @if ($errors->has('role'))
            <span class="text-sm text-red-400">{{ $errors->first('role') }}</span>
        @endif
    </div>


</div>
