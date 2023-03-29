<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function insertProduct(Request $request)
    {

        if (isset($request->name) && isset($request->category_id)) {
            $productModel = new Products();

            $result = $productModel->insertProducts($request);

            if($result[0]->MENSAJE === 'Registro exitoso'){
                $jsonresponse = array(
                    "status" => 200,
                    "mensaje" => $result[0]->MENSAJE
                );
            }else{

                $jsonresponse = array(
                    "status" => 500,
                    "mensaje" => $result[0]->MENSAJE
                );
            }
        } else {
            $jsonresponse = array(
                "status" => 500,
                "mensaje" => 'Por favor verifique si ingreso el nombre y categoria'
            );
        }

        return response($jsonresponse, $jsonresponse["status"]);
    }

    public function paginationProducts($cant)
    {
        $data = Products::simplePaginate($cant);
        return response($data, 200)->header('Content-Type', 'application/json');
    }
}
