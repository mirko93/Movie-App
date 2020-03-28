@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row"> 
            <img src="/img/AvatarPoster.jpg" alt="" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Movie (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span><svg class="w-4" id="color" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg></span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="mt-8 text-gray-300">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque consectetur dolorum iste illo expedita nam enim, mollitia excepturi omnis? Beatae dicta sed fuga recusandae delectus animi, repellendus consequatur magni aspernatur officiis totam tenetur rerum soluta ipsam fugiat unde sunt corporis culpa laboriosam in vel explicabo alias incidunt? Dolore, quis iste?
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon</div>
                            <div class="text-sm text-gray-400">Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Bong Joon</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        Play Trailer
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end movie info --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="now-playing-movies py-24">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/AvatarPoster.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Name</a>
                            <div class="text-gray-400 text-sm">
                                Producen
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection