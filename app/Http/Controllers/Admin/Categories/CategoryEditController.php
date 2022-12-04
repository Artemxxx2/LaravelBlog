<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryEditController extends Controller
{
    public function __invoke(Category $category)
    {
       return view('admin.categories.categoriesAdminEdit',compact('category'));
    }
}
