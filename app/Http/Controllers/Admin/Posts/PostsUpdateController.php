<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\Users\BaseController;
use App\Http\Requests\Admin\Posts\UpdateRequest;
use App\Models\Post;

class PostsUpdateController extends BaseController
{
    public function __invoke(Post $post,UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($post,$data);
        return redirect()->route('posts.index')->with('FLASH_UPDATED', 'Post was updated');
    }
}
