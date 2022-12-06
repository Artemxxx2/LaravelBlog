<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersCreateController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRole();
        return view('admin.users.createAdmin',compact('roles'));
    }
}
