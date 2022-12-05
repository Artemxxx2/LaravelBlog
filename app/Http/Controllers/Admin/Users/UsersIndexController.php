<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersIndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
}
