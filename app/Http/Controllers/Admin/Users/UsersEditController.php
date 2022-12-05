<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersEditController extends Controller
{
    public function __invoke(User $user)
    {
       return view('admin.users.categoriesAdminEdit',compact('user'));
    }
}
