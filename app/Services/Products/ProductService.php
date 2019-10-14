<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: October/10/19
 * Time: 11:50
 */

namespace App\Services\Products;


use App\Repositories\Products\ProductInterfaceRepository;
use App\Services\BaseService;

class ProductService extends BaseService implements ProductInterfaceService
{
    protected $repo;

    public function __construct(ProductInterfaceRepository $repo)
    {
        $this->repo = $repo;
    }

    public function setRepo()
    {
       return $this->repo;
    }
}
