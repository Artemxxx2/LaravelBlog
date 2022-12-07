<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Requests\Admin\Categories\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
          $data = $request->validated();
          $this->service->store($data);
          return redirect()->route('categoty.index')->with('flash_message','Category was added');
    }
}
