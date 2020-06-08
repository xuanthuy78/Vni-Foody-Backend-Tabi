<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;


class OrderDetail extends Model
{
    protected $table = 'order_details';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
