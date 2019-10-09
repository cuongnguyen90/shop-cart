<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/7/19
 * Time: 16:35
 */

namespace App\Http\Repositories\Products;


interface ProductInterfaceRepository
{
    public function get($id);

    public function getAll();

    public function update($id,array $attribute);

    public function create(array $attribute);

    public function delete($id);
}
