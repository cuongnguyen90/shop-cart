<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/8/19
 * Time: 14:00
 */

namespace App\Http\Repositories\Categories;


interface CategoryInterfaceRepository
{
    public function get($id);

    public function getAll();

    public function update($id,array $attribute);

    public function create(array $attribute);

    public function delete($id);
}
