<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tags\StoreRequest;
use App\Models\Tag;

class TagsStoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('tags.index')->with('flash_message','Tag was successfully added');
    }
}
