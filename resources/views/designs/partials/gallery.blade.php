<div class="grid grid-cols-4 gap-4 p-4">

    @if ($designs->isEmpty())
        <p class="col-span-4 text-center text-gray-400">No designs yet</p>
    @else
        @foreach ($designs as $design)
            <div class="bg-gray-100 p-2">
                <img src="{{ asset('storage/' . $design->img_path) }}" class="w-full h-48 object-cover">

                <div class="flex justify-between items-center">
                    <p class="mt-2 text-gray-800">{{ $design->name }}</p>
                    <div class="flex items-center justify-center gap-4">
                        <a href="{{ url('/designs/' . $design->id . '/edit') }}"
                            class="px-4 py-1 text-md text-orange-600 hover:text-orange-200 bg-orange-200 hover:bg-orange-400 rounded-full">Edit</a>

                        <form action="{{ url('/designs/' . $design->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-4 py-2 text-sm text-red-400 hover:text-red-200 bg-red-200 hover:bg-red-400 rounded-full"
                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
        @endforeach

    @endif

</div>
