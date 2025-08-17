<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ProductRepository
{
    /**
     * Summary of getById
     * @param mixed $product_id
     * @return mixed|\Illuminate\Database\Query\Builder
     */
    public function getById($product_id)
    {
        return DB::table('products')->find($product_id);
    }
}