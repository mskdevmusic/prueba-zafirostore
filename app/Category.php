<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'CATEGORY';

    protected $primaryKey = 'id';
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['name', 'slug', 'created_at', 'updated_at', 'status'];


    public function getAllTask($order)
    {
        $resultQuery = DB::select("CALL SP_GET_ALL_CATEGORY('" . $order ."');");

        return $resultQuery;
    }

    public function insertCategory($name)
    {
        $resultQuery = DB::select("CALL SP_INSERT_CATEGORY('" . $name . "');");

        return $resultQuery;
    }
}
