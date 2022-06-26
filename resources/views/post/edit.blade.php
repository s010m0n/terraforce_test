<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2 justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit post') }}
            </h2>
            <form method="POST" action="{{route('post.destroy', $post->id)}}">
                @csrf
                @method('DELETE')
                <input type="submit"
                       class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                       value="Delete post"/>
            </form>
        </div>
    </x-slot>

    <div class="container py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('post.components.form')
    </div>


</x-app-layout>
