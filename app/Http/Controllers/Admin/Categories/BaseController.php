<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Service\CategoriesService;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;
    public function __construct(CategoriesService $service)
    {
        $this->service = $service;
    }
}
