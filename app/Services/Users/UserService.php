<?php

namespace App\Services\Users;

use App\Models\User\User;
use App\Repositories\Users\UserRepository;

class UserService {

    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Store a new User resource
     * 
     * @param array $data
     * @return User
     */
    public function store(array $data)
    { 
        return $this->userRepository->create($data);
    }
}