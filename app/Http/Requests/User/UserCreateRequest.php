<?php

namespace App\Http\Requests\User;

use App\Http\Requests\JsonRequest;

class UserCreateRequest extends JsonRequest
{
    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
            'role' => 'required|in:' . implode(',', config('roles.roles')),
        ];
    }
}
