<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/10/19
 * Time: 10:15
 */

namespace App\Services;


interface BaseInterfaceService
{
    public function getAll();

    public function getById($id);

    public function create(array $attribute);

    public function delete($id);
}
