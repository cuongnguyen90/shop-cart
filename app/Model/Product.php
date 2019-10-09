<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function bill()
    {
        return $this->belongsToMany(Bill::class,'bill_product','product_id','id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class,'category_product','product_id','category_id','id');

    }
}
