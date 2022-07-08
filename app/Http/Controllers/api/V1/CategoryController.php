<?php

namespace App\Http\Controllers\api\V1;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        return Category::all();
    }


    public function show(Category $category)
    {
        //
    }
}
