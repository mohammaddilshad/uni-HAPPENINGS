<x-app-layout>
    @section('hero')
    <div class="w-full text-center py-32">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            WELCOME TO <span class="text-orange-500">&lt;uni&gt;</span> <span class="text-gray-900"> HAPPENINGS</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">Lovely Professional University</p>
        <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
            href="http://127.0.0.1:8000/blog">Start
            Reading</a>
    </div>
    @endsection

    <main class="container mx-auto px-5 flex flex-grow">
        <div class="mb-10 w-full">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-orange-500 font-bold">Featured Happenings</h2>
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        @foreach ($featuredPosts as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-posts.post-card :post="$post" />
                        </div>
                        @endforeach
                    </div>
                </div>
                <a class="mt-10 block text-center text-lg text-orange-500 font-semibold"
                    href="http://127.0.0.1:8000/blog">More
                    Happenings</a>
            </div>
            <hr>

            <h2 class="mt-16 mb-5 text-3xl text-orange-500 font-bold">Latest Happenings</h2>
            <div class="w-full mb-5">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" />
                    </div>
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-orange-500 font-semibold"
                href="http://127.0.0.1:8000/blog">More
                Happenings</a>
        </div>
    </main>


</x-app-layout>