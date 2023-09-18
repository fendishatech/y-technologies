<div class="mt-6 md:flex md:items-center md:justify-between">
    {{-- Filter Section --}}
    <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg rtl:flex-row-reverse">
        <button
            class="px-5 py-2 text-xs font-medium text-gray-600 bg-white border rounded-md sm:w-auto gap-x-2 hover:text-white  hover:bg-primary-300 hover:bg-opacity-80 transition-colors duration-200 sm:text-sm ">
            View all
        </button>

    </div>
    {{-- Search Section --}}
    <div class="relative flex items-center mt-4 md:mt-0">
        <span class="absolute">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </span>


        <input type="text" placeholder="Search" id="searchInput"
            class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5  focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">

    </div>
</div>

<div id="search-results"></div>

{{-- @section('scripts') --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('search-results');

        searchInput.addEventListener('keyup', function() {
            const searchTerm = searchInput.value;
            // Send an AJAX request to the Laravel backend
            if (searchTerm === '') {
                // If the search term is empty, display everything or perform a default action
                searchResults.innerHTML = ''; // Clear previous results
                // You can choose to display all items, show a default message, or perform any desired action here
                return;
            }
            fetch(`/clients/search/${encodeURIComponent(searchTerm)}`)
                .then(response => response.json())
                .then(data => {
                    // Handle and display the search results
                    searchResults.innerHTML = ''; // Clear previous results

                    if (data.length > 0) {
                        data.forEach(result => {
                            const resultDiv = document.createElement('div');
                            resultDiv.innerHTML = `<h1 class="text-center text-2xl">${result
                                .first_name}</h1>`; // Display the result data
                            searchResults.appendChild(resultDiv);
                        });
                    } else {
                        searchResults.textContent = 'No results found.';
                    }
                })
                .catch(error => {
                    console.error('An error occurred:', error);
                });
        });
    });
</script>
{{-- @endsection --}}
