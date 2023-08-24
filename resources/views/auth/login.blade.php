<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Y technologies | Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full px-6 sm:px-0 h-screen flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 rounded-lg bg-white" action={{ url('/login') }} method="POST">
            @csrf
            <div class="flex font-bold flex-col items-center justify-center mt-6">
                <img class="h-18 w-24 mb-3" src="/images/logo/y-tech-logo.svg" />
                <p class="my-4 hiwua text-2xl font-semibold text-primary-800 uppercase">
                    Y Technologies
                </p>
            </div>
            @if ($errors->has('custom_error'))
                <p class="py-2 text-sm text-red-400 text-center">
                    {{ $errors->first('custom_error') }}
                </p>
            @endif
            {{-- Phone No --}}
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="tel" name="phone_no" placeholder="Phone no"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-primary-300"
                            value="{{ old('phone_no') }}" />
                    </div>
                    @if ($errors->has('phone_no'))
                        <span class="text-sm text-red-400">{{ $errors->first('phone_no') }}</span>
                    @endif
                </div>
                {{-- Password --}}
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="password" placeholder="Password"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-primary-300" />
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit"
                    class="zelan text-2xl font-semibold w-full py-2 mt-8 rounded-full bg-primary-600 text-gray-100 focus:outline-none">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>
