<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/8/19
 * Time: 13:56
 */

namespace App\Http\Repositories\Categories;


use App\Http\Repositories\BaseEloquentRepository;
use App\Model\Category;

class CategoryEloquentRepository extends BaseEloquentRepository
{

    protected function setModel()
    {
       return Category::class;
    }
}
