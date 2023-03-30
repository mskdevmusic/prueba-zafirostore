<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getAllCategory($order = 'asc')
    {
        $categoryModel = new Category();
        $listCategory = $categoryModel->getAllTask($order);
        
        return response($listCategory, 200)->header('Content-Type', 'application/json');
    }
}
