<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use App\Models\Category;

class CategoryUpdateController extends Controller
{
    public function __invoke(Category $category,UpdateRequest $request)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('categoty.index')->with('FLASH_UPDATED','Category was updated successfully');
    }
}
