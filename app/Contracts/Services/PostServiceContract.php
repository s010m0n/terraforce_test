<?php

namespace App\Contracts\Services;

interface PostServiceContract
{
    public function getAllPosts(bool|int $user = false, bool|int $paginate = false, bool|int $limit = false);

    public function getPost(int $id);

    public function createOrUpdate(bool|int $post = false, array $request);

    public function deletePost(int $id);



}
