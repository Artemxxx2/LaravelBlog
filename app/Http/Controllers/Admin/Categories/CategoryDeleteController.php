<?php

namespace App\Http\Controllers\Admin\Categories;
use App\Models\Category;

class CategoryDeleteController extends BaseController
{
    public function __invoke(Category $category)
    {
       $this->service->delete($category);
       return redirect()->route('categoty.index')->with('FLASH_DELETED','Category was deleted succesfully');
    }
}
