<?php

namespace App\Contracts\Repositories;

interface PostRepositoryContract
{
    public function getAll(bool|int $user = false, bool|int $paginate = false, bool|int $limit = false);

    public function find(int $id);

    public function createOrUpdate(array $request, bool|int $post = false);

    public function delete(int $id);
}
