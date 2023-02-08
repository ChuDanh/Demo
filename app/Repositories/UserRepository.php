<?php

namespace App\Repositories;
use App\Models\User;
use App\Repositories\Register\Hash;


class UserRepository
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }


    public function authenticate($email, $password)
    {
        // Validate the user credentials and return the user if successful
    }

}
