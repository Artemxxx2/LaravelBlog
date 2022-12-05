<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Admin\Posts\StoreRequest;

class PostsStoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        // session()->flash('message', 'Post successfully updated.');
        return redirect()->route('posts.create.index');
    }
}
