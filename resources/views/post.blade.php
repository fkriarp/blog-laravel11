<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
            By
            <a href="{{ route('articlesBy', $post->author->username) }}"
                class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
            in
            <a href="{{ route('articlesBy', $post->author->id) }}"
                class="hover:underline text-base text-gray-500">{{ $post->category->category }}</a>
            | {{ $post['created_at']->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'], 150 }}</p>
        <a href="{{ route('posts') }}" class="font-medium text-blue-500 hover:underline">&laquo; Back to post</a>
    </article>
</x-layout>
