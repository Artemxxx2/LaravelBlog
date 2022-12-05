<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }
}
