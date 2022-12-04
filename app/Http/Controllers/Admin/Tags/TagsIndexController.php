<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsIndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('admin.tags.index',compact('tags'));
    }
}
