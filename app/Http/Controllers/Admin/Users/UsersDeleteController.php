<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UsersDeleteController extends Controller
{
    public function __invoke(Post $post)
    {
       $post->delete();
       return redirect()->route('posts.index');
    }
}
