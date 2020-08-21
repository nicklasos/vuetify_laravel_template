<?php

namespace App\Console\Commands;

use App\Http\Requests\User\UserCreateRequest;
use App\Repositories\Users;
use Illuminate\Console\Command;
use Validator;

class UserCreate extends Command
{
    protected $signature = 'user:create {email} {role=user}';
    protected $description = 'Create user';

    public function handle(Users $users)
    {
        $password = $this->secret('Type password');
        $repeat = $this->secret('Repeat');

        if ($password !== $repeat) {
            $this->error('Password mismatch');
            exit();
        }

        $validator = Validator::make(
            array_merge(compact('password'), $this->arguments()),
            (new UserCreateRequest())->rules()
        );

        if ($validator->fails()) {
            $this->error($validator->errors());
            exit();
        }

        $email = $this->argument('email');
        $role = $this->argument('role');

        $users->create(compact('email', 'password', 'role'))->save();

        $this->info('ok');
    }
}
