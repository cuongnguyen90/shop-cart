<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/8/19
 * Time: 13:56
 */

namespace App\Repositories\Categories;

use App\Model\Category;
use App\Repositories\Products\ProductEloquentRepository;

class CategoryEloquentRepository extends ProductEloquentRepository implements CategoryInterfaceRepository
{

    protected function setModel()
    {
       return Category::class;
    }
}
