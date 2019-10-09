<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/7/19
 * Time: 16:41
 */

namespace App\Http\Repositories\Products;


use App\Http\Repositories\BaseEloquentRepository;
use App\Model\Product;

class ProductEloquentRepository extends BaseEloquentRepository
{

    protected function setModel()
    {
        return Product::class;
    }
}
