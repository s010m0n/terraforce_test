<?php

namespace App\Services;

use App\Contracts\Repositories\PostRepositoryContract;
use App\Contracts\Services\PostServiceContract;

class PostService implements PostServiceContract
{
    public function __construct(private PostRepositoryContract $postRepository)
    {
    }

    /**
     * @param bool|int $user
     * @param bool|int $paginate
     * @param bool|int $limit
     * @return mixed
     */
    public function getAllPosts(bool|int $user = false, bool|int $paginate = false, bool|int $limit = false)
    {
        return $this->postRepository->getAll($user,$paginate,$limit);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getPost(int $id)
    {
        return $this->postRepository->find($id);
    }

    /**
     * @param array $request
     * @param bool|int $post
     * @return mixed
     */
    public function createOrUpdate(array $request, bool|int $post = false)
    {
        return $this->postRepository->createOrUpdate($request, $post);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deletePost(int $id)
    {
        return $this->postRepository->delete($id);
    }

}
