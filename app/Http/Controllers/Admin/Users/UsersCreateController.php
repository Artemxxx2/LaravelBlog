<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class UsersCreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.users.createAdmin');
    }
}
