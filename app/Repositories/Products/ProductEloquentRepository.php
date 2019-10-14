<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/7/19
 * Time: 16:41
 */

namespace App\Repositories\Products;

use App\Model\Product;
use App\Repositories\BaseEloquentRepository;

class ProductEloquentRepository extends BaseEloquentRepository implements ProductInterfaceRepository
{

    protected function setModel()
    {
        return Product::class;
    }
}
