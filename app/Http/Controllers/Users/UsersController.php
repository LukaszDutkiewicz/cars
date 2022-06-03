<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Services\Users\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public UsersService $usersService;

    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    public function list(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $models = $this->usersService->list($name, $email);
        return view('users.list', ['users' => $models]);
    }
}
