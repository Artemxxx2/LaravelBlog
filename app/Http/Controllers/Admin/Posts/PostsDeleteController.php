<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsDeleteController extends Controller
{
    public function __invoke(Post $post)
    {
       $post->delete();
       return redirect()->route('posts.index');
    }
}
