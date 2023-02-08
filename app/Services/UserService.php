<?php

namespace App\Services;
use App\Repositories\UserRepository;
class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function authenticate($email, $password)
    {
        $user = $this->auth->authenticate($email, $password);
        if (!$user) {
            return false;
        }

        return $this->jwt->fromUser($user);
    }

}
