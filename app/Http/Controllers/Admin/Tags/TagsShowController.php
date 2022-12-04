<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.show',compact('tag'));
    }
}
