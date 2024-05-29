<!-- resources/views/posts/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold mb-6">{{ $post->title }}</h1>
        <p class="text-gray-700 mb-4">Category: {{ $post->category->name }}</p>
        <p class="text-gray-700 mb-4">Author: {{ $post->user->name }}</p>
        <p class="text-gray-700 mb-4">{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Posts</a>
    </div>
</x-app-layout>
