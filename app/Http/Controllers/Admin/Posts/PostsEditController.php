<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class PostsEditController extends Controller
{
    public function __invoke(Post $post,Category $categories)
    {
       return view('admin.posts.categoriesAdminEdit',compact('post', 'categories'));
    }
}
