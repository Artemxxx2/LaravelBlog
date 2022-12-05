<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\UpdateRequest;
use App\Models\Post;

class PostsUpdateController extends Controller
{
    public function __invoke(Post $post,UpdateRequest $request)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('posts.index');
    }
}
