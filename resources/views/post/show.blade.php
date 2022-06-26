<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2 justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Post').' #'.$post->id }}
            </h2>
            <a href="{{route('post.edit', $post->id)}}" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit post</a>
        </div>
    </x-slot>

    <div class="container py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-2 w-full p-6 rounded-lg shadow-lg bg-white ">
            <div>
                <div class="text-gray-600 text-xl">Title</div>
                <div class="my-2">{{$post->title}}</div>
            </div>
            <div>
                <div class="text-gray-600 text-xl">Description</div>
                <div class="my-2">{{$post->description}}</div>
            </div>
        </div>
    </div>


</x-app-layout>
