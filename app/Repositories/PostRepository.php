<?php

namespace App\Repositories;

use App\Contracts\Repositories\PostRepositoryContract;
use App\Models\Post;

class PostRepository implements PostRepositoryContract
{

    /**
     * @param bool|int $user
     * @param bool|int $paginate
     * @param bool|int $limit
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll(bool|int $user = false, bool|int $paginate = false, bool|int $limit = false)
    {
        $posts = Post::query();
        if ($user){
            $posts->where('user_id',$user);
        }

        if ($limit){
            $posts->limit($limit);
        }

        if ($paginate){
            $posts = $posts->paginate($paginate);
        } else {
            $posts = $posts->get();
        }

        return $posts;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        return Post::find($id);
    }

    /**
     * @param array $request
     * @param bool|int $post
     * @return void
     */
    public function createOrUpdate(array $request, bool|int $post = false)
    {
        $post = $this->find($post);

        if ($post !== null){
          $post->update([
              'title' => $request['title'],
              'description' => $request['description']
          ]);
        } else {
            $post = Post::create([
                'user_id' => auth()->id(),
                'title' => $request['title'],
                'description' => $request['description']
            ]);
        }
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id)
    {
        $post = $this->find($id);
        $post->delete();
    }

}
