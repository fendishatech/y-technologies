<div class="mt-6 sm:flex sm:items-center sm:justify-between ">
    <div class="text-md text-gray-500 dark:text-gray-400">
        Page <span class="font-medium ">{{ $customers->currentPage() }} of {{ $customers->lastPage() }}</span>
    </div>

    <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
        <a href="{{ $customers->previousPageUrl() ?? '#' }}"
            class="flex items-center justify-center w-1/2 px-5 py-2 text-md text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:text-white  hover:bg-primary-300 hover:bg-opacity-80">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>

            <span>
                previous
            </span>
        </a>

        <a href="{{ $customers->nextPageUrl() ?? '#' }}"
            class="flex items-center justify-center w-1/2 px-5 py-2 text-md text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-primary-300 hover:bg-opacity-80 hover:text-white">
            <span>
                Next
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</div>
