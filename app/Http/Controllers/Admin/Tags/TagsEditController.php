<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsEditController extends Controller
{
    public function __invoke(Tag $tag)
    {
       return view('admin.tags.categoriesAdminEdit',compact('tag'));
    }
}
