<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Interfaces\UserServiceInterface;
use App\Models\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepository $userReposiory)
    {
        $this->userRepository = $userReposiory;
    }

    public function paginate()
    {
        $users = $this->userRepository->getAllPaginate();
        return $users;
    }
}
