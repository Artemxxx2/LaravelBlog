<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\Users\BaseController;
use App\Models\Post;

class PostsDeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
       $this->service->delete($post);
       return redirect()->route('posts.index')->with('FLASH_DELETED','Post was deleted');
    }
}
