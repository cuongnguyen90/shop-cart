<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/7/19
 * Time: 16:36
 */

namespace App\Repositories;



abstract class BaseEloquentRepository implements BaseInterfaceRepository
{

    protected $model;

    public function __construct()
    {
        $this->getModel();
    }

    abstract protected function setModel();

    protected function getModel()
    {
        $this->model = app()->make($this->setModel());
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function update($id, array $attribute)
    {
        // TODO: Implement update() method.
    }

    public function create(array $attribute)
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


}
