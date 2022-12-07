<?php

namespace App\Service;

use App\Models\Category;

class CategoriesService {
    public function delete($category)
    {
        $category->delete();
    }
    public function store($data)
    {
        Category::firstOrCreate($data);
    }
}
