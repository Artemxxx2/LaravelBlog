<?php

namespace App\Http\Controllers\Admin\Posts;

class PostsCreateController extends BaseController
{
    public function __invoke()
    {
        [$tags,$categories] = $this->service->create();
        return view('admin.posts.createAdmin',compact('tags','categories'));
    }
}
