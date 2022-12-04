<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsCreateController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.createAdmin',compact('tag'));
    }
}
