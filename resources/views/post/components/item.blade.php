<tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$post->id}}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        <a href="{{route('post.show', $post->id)}}">{{Str::limit($post->title,40)}}</a>
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        {{Str::limit($post->description,40)}}
    </td>
    <td>
        <div class="flex space-x-2 mx-1 justify-end">
            <a href="{{route('post.edit', $post->id)}}" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
        </div>
    </td>
</tr>

