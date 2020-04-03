<div class="relative mt-3 md:mt-0">
    <input wire:mode.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 py-2 pl-8 focus:outline-none focus:shadow-outline" placeholder="Search...">
    <div class="absolute top-0">
        <svg class="fill-current text-gray-500 w-4 mt-3 ml-2" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-1 0 136 136.21852">
            <g id="surface1">
            <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031"/>
            </g>
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-5"></div>

    @if (strlen($search) >= 2)
    <div class="absolute bg-gray-800 rounded w-64 mt-4">
        @if ($searchResults->count() > 0)
            <ul>
                @foreach ($searchResults as $result)
                    <li class="border-b border-gray-700">
                        <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                            @if ($loop->last) @keydown.tab="isOpen = false" @endif
                        >
                            @if ($result['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                            @else
                            <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                            @endif
                            
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                    </li>
                @endforeach

            </ul>
        @else
            <div class="px-3 py-3">No results for "{{ $search }}"</div>
        @endif

    </div>          
    @endif
</div>