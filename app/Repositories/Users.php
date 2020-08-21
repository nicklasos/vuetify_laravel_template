<?php

namespace App\Repositories;

use App\User;
use Str;

class Users
{
    public function create(array $data): User
    {
        $user = new User([
            'name' => Str::before($data['email'], '@'),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $user->role = $data['role'];
        $user->save();

        return $user;
    }
}
