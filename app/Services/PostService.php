<?php

namespace App\Services;

use App\Contracts\Repositories\PostRepositoryContract;
use App\Contracts\Services\PostServiceContract;

class PostService implements PostServiceContract
{
    public function __construct(private PostRepositoryContract $postRepository)
    {
    }

    public function getAllPosts(bool|int $user = false, bool|int $paginate = false, bool|int $limit = false)
    {

        return $this->postRepository->getAll($user,$paginate,$limit);
    }

    public function getPost(int $id)
    {
        return $this->postRepository->find($id);
    }

    public function createOrUpdate(bool|int $post = false, array $request)
    {
        return $this->postRepository->createOrUpdate($post, $request);
    }

    public function deletePost(int $id)
    {
        return $this->postRepository->delete($id);
    }

}
