<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/10/19
 * Time: 11:51
 */

namespace App\Services;


abstract class BaseService implements BaseInterfaceService
{
    protected $repo;

    public function __construct()
    {
        $this->getRepo();
    }

    abstract public function setRepo();

    public function getRepo()
    {
        return $this->repo = app()->make($this->setRepo());
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function getById($id)
    {
        return $this->repo->get($id);
    }

    public function create(array $atribute)
    {
        // TODO: Implement create() method.
    }
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
