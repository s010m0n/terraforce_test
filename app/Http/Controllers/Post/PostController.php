<?php

namespace App\Http\Controllers\Post;

use App\Contracts\Services\PostServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(private PostServiceContract $postService)
    {

    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = $this->postService->getAllPosts(auth()->id(),12,false);

        return view('post.index',[
           'posts' => $posts
        ]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('post.create');
    }


    /**
     * @param PostStoreRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PostStoreRequest $request)
    {
        $this->postService->createOrUpdate($request->validated(), false );

        return redirect(route('post.index'));
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $post = $this->postService->getPost($id);

        return view('post.show',[
           'post' => $post
        ]);
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        $post = $this->postService->getPost($id);

        return view('post.edit', [
            'post' => $post
        ]);
    }


    /**
     * @param PostUpdateRequest $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $this->postService->createOrUpdate($request->validated(), $id);

        return redirect(route('post.index'));
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $this->postService->deletePost($id);

        return redirect(route('post.index'));
    }
}
