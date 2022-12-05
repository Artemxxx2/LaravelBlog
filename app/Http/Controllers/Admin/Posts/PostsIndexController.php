<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsIndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }
}
