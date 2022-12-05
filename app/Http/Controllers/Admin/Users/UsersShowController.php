<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UsersShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }
}
