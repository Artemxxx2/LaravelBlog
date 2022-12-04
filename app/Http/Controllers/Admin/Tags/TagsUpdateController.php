<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use App\Models\Tag;

class TagsUpdateController extends Controller
{
    public function __invoke(Tag $tag,UpdateRequest $request)
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route('tags.index');
    }
}
