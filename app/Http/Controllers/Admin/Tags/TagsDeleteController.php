<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsDeleteController extends Controller
{
    public function __invoke(Tag $tag)
    {
       $tag->delete();
       return redirect()->route('tags.index');
    }
}
