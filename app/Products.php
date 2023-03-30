<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    protected $table = 'PRODUCTS';

    protected $primaryKey = 'id';
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['name', 'slug', 'created_at', 'updated_at', 'status', 'category_id'];


    public function insertProducts($data)
    {
        $resultQuery = DB::select("CALL SP_INSERT_PRODUCTS('" . $data->name . "', " . $data->category_id . ", @mensaje);");
        $resultQuery = DB::select("SELECT @mensaje MENSAJE;");

        return $resultQuery;
    }

    public function getCategoryVsProducts()
    {
        $resultQuery = DB::select("CALL SP_GET_CATEGORY_VS_PRODUCTS();");

        return $resultQuery;
    }
}
