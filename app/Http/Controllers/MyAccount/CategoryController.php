<?php

namespace App\Http\Controllers\MyAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends Controller
{
    public function fetch()
    {
        $category = Category::select('id','name','thumbnail')->where('active',1)->orderBy('id', 'desc')->paginate(500);
        return collect($category);
    }
}
