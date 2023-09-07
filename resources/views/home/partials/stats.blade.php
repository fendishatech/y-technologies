<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
    <!-- Empty Card 1 -->
    {{-- <div class="p-4 overflow-hidden transform transition-transform duration-300 hover:scale-105">
        <div class="opacity-60 bg-gradient-to-tr from-teal-800 to-teal-400 rounded-lg shadow-md p-6">
            <a href="/orders?filter=pending">
                <h1 class="text-2xl text-white font-bold">Pending Orders</h1>
                <p class="text-3xl text-white font-bold">12</p>
            </a>
        </div>
    </div> --}}
    {{-- Pending Orders --}}
    <div class="p-4 overflow-hidden transform transition-transform duration-300 hover:scale-105">
        <div class="opacity-60 bg-white border-t-4 border-orange-500 rounded-lg shadow-md p-6">
            <a href="/orders?filter=pending">
                <h1 class="text-xl text-gray-600 font-semibold">Active Orders</h1>
                <p class="text-3xl text-orange-700 font-bold">{{ $active_orders }}</p>
            </a>
        </div>
    </div>

    {{-- Completed Orders --}}
    <div class="p-4 overflow-hidden transform transition-transform duration-300 hover:scale-105">
        <div class="opacity-60 bg-white border-t-4 border-green-500 rounded-lg shadow-md p-6">
            <a href="/orders?filter=pending">
                <h1 class="text-1xl text-gray-600 font-semibold">Completed Orders</h1>
                <p class="text-3xl text-green-700 font-bold">{{ $completed_orders }}</p>
            </a>
        </div>
    </div>

    {{-- Sales --}}
    <div class="p-4 overflow-hidden transform transition-transform duration-300 hover:scale-105">
        <div class="opacity-60 bg-white border-t-4 border-primary-500 rounded-lg shadow-md p-6">
            <a href="/orders?filter=pending">
                <h1 class="text-1xl text-gray-600 font-semibold">Sales</h1>
                <p class="text-3xl text-primary-700 font-bold">12</p>
            </a>
        </div>
    </div>

    <!-- Users -->
    <div class="p-4 overflow-hidden transform transition-transform duration-300 hover:scale-105">
        <div class="opacity-60 bg-white border-t-4 border-indigo-500 rounded-lg shadow-md p-6">
            <a href="/orders?filter=pending">
                <h1 class="text-1xl text-gray-600 font-semibold">Employees</h1>
                <p class="text-3xl text-indigo-700 font-bold">{{ $employees }}</p>
            </a>
        </div>
    </div>
</div>
