@php
    $links = [['url' => route('home'), 'text' => 'Home'], ['url' => route('home'), 'text' => 'Orders'], ['url' => route('home'), 'text' => 'Store']];
@endphp


<header>
    <nav class="container mx-auto py-6 flex justify-between items-center">
        {{-- Logo --}}
        <a href="{{ url('home') }}">
            <div class="flex items-center">
                <img class="w-24 h-12" src="/images/logo/y-tech-logo.svg" alt="Logo">
                <span class="hidden md:block text-primary-500 uppercase text-2xl font-semibold">Technologies</span>
            </div>
        </a>
        {{-- Links --}}
        <ul class="flex">
            @foreach ($links as $link)
                <li class=""><a
                        class="w-full px-6 py-2 text-2xl text-gray-600 font-semibold rounded cursor-pointer hover:bg-primary-400 hover:text-white"
                        href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
        {{-- Actions --}}
        <div class="flex">
            <button class="cta-btn-primary">Logout</button>
        </div>
    </nav>
</header>
