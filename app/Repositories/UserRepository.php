<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository implements UserRepositoryInterface
{
    public function getAllPaginate()
    {
        $users = User::paginate(15);
        return $users;
    }
}
