<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function product()
    {
        return $this->belongsToMany(Product::class,'bill_product','bill_id','id');
    }
}
