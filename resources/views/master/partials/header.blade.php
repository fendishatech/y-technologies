@php
    $links = [['url' => route('home'), 'text' => 'Home'], ['url' => route('home'), 'text' => 'Orders'], ['url' => route('home'), 'text' => 'Store'], ['url' => route('home'), 'text' => 'Files']];
@endphp


<header>
    <nav class="container mx-auto p-6 relative">

        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <a href="{{ url('home') }}">
                <div class="flex items-center">
                    <img class="w-24 h-12" src="/images/logo/y-tech-logo.svg" alt="Logo">
                    <span class="hidden md:block text-primary-500 uppercase text-2xl font-semibold">Technologies</span>
                </div>
            </a>
            {{-- Links --}}
            <ul class="hidden md:flex">
                @foreach ($links as $link)
                    <li class=""><a
                            class="w-full px-6 py-2 text-2xl text-gray-600 font-semibold rounded cursor-pointer hover:bg-primary-400 hover:text-white"
                            href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
            {{-- Actions --}}
            <form class="hidden md:flex" action="{{ url('logout') }}" method="POST">
                @csrf
                <button type="submit" class="cta-btn-primary">Logout</button>
            </form>

            <!-- Hamburger Icon -->
            <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
            <!-- Hamburger Icon -->
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden">
            <div id="menu"
                class="hidden px-4 z-50 absolute flex-col items-center self-end py-8 mt-10 space-y-6  bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-2xl text-2xl text-yellow-800 zelan">
                @foreach ($links as $link)
                    <a class="w-full px-6 py-2 text-2xl text-gray-600 font-semibold rounded cursor-pointer hover:bg-primary-400 hover:text-white"
                        href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                @endforeach
            </div>
        </div>
        <!-- Mobile Menu -->
    </nav>
</header>
