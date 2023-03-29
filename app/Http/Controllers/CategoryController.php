<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getAllCategory($order = 'asc')
    {
        if($order === 'desc'){
            $listCategory = Category::orderBy('name', 'desc')->get();
        }else{
            $listCategory = Category::orderBy('name', 'asc')->get();
        }
        
        return response($listCategory, 200)->header('Content-Type', 'application/json');
    }
}
