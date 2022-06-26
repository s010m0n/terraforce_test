<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2 justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create post') }}
            </h2>
            <a type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add post</a>
        </div>
    </x-slot>

    <div class="container py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('post.components.form')
    </div>



</x-app-layout>
