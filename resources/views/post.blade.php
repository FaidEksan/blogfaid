<x-layout>
    <x-slot:tittle> {{ $title }} </x-slot:tittle>

            <article class="py-8 max-w-screen-md">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
                <div class="text-base text-gray-500">
                    <a href="/authors/{{ $post->author->name }}"> {{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
                </div>
                    <p class="my-4 font-light">{{ $post['body'] }}</p> 

                    <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to Posts</a>
            </article>

        </div>
</x-layout> 