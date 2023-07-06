<?php

namespace App\Services\User;

use App\Models\User\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Collection;

class UserService
{
    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get an user instance by ID
     * 
     * @param User $user
     * @return User
     */
    public function getById($user)
    {
        return $this->userRepository->find($user->id);
    }

    /**
     * Get all registers
     * 
     * @return Collection
     */
    public function getAll()
    {
        return $this->userRepository->all();
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

    /**
     * Update a User resource
     * 
     * @param array $data
     * @param User $user
     * @return User
     */
    public function update(array $data, User $user)
    {
        return $this->userRepository->update($data, $user->id);
    }
}
