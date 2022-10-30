<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blog Post
        </h2>
        {{-- Add Button --}}
        <a href="{{ route('blog-post.create') }}">Add Post</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($blogPosts as $post)
                    <a href="{{ route('blog-post.show', [$post->id]) }}">{{ $post->title }}</a>
                    <a href="{{ route('blog-post.edit', [$post->id]) }}">Edit</a>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
