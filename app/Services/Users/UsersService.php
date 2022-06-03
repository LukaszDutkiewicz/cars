<?php

namespace App\Services\Users;

use App\Models\Users\User;

use Illuminate\Support\Facades\DB;

class UsersService
{

    public User $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    public function list($name, $email)
    {
        return $this->userModel->get();
    }
}
