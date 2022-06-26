<div class="my-2 w-full p-6 rounded-lg shadow-lg bg-white ">
    <form method="POST"
    @if(request()->routeIs('post.edit')) action="{{route('post.update',$post->id)}}"
    @elseif(request()->routeIs('post.create')) action=" {{route('post.store')}}"
    @endif>
        @csrf
        @if(request()->route()->action['as']=='post.edit') @method('PUT') @endif
        <div class="form-group mb-6">
            <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="title" value="@isset($post->title){{$post->title}}@endisset"
                   placeholder="Title">
        </div>
        <div class="form-group mb-6">
      <textarea
          class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
          name="description"
          rows="3"
          placeholder="Description"

      >@isset($post->description){{$post->description}}@endisset</textarea>
        </div>
        <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">
            @if(request()->routeIs('post.edit')) Update
            @elseif(request()->routeIs('post.create')) Create
            @endif
        </button>
    </form>
</div>
