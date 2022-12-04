<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
          $data = $request->validated();
          Category::firstOrCreate($data);
          session()->flash('message', 'Post successfully updated.');
          return redirect()->route('create.index');
    }
}
