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

    public function insertCategory(Request $request)
    {

        if(isset($request->name)){
            $categoryModel = new Category();

            $categoryModel->insertCategory($request->name);

            $jsonresponse = array(
                "status" => 200,
                "mensaje" => 'Registro Exitoso'
            );

            return response($jsonresponse, 200)->header('Content-Type', 'application/json');
        }else{
            $jsonresponse = array(
                "status" => 500,
                "mensaje" => 'Por favor ingresar un nombre'
            );

            return response($jsonresponse, 500)->header('Content-Type', 'application/json');
        }
    }
}
