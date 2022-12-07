<?php

namespace App\Http\Controllers\Admin\Posts;

class PostsIndexController extends BaseController
{
    public function __invoke()
    {
        $posts = $this->service->index();
        return view('admin.posts.index',compact('posts'));
    }
}
