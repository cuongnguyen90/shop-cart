<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/10/19
 * Time: 10:04
 */

namespace App\Repositories;


interface BaseInterfaceRepository
{
    public function getAll();

    public function get($id);

    public function create(array $attribute );

    public function update($id, array $attribute);

    public function delete($id);
}
