<?php

namespace App\Repositories;

use App\Contracts\Repositories\PostRepositoryContract;
use App\Models\Post;

class PostRepository implements PostRepositoryContract
{

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

    public function find(int $id)
    {
        return Post::find($id);
    }

    public function createOrUpdate(bool|int $post = false, array $request)
    {
        $post = $this->find($post);

        if ($post !== null){
          $post->update([

          ]);
        } else {
            $post = Post::create([

            ]);
        }
    }

    public function delete(int $id)
    {
        $post = $this->find($id);
        $post->delete();
    }

}
