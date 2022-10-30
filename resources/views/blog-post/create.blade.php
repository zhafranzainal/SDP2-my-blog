<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blog Post Create
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Create Blog Post Form --}}
                <form action="{{ route('blog-post.store') }}" method="POST">
                    @csrf
                    <input type="text" id="title" name="title" placeholder="Enter Post Title" required>
                    <input type="text" id="body" name="body" placeholder="Enter Post Title" required>

                    <button type="submit">
                        Create Post
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
