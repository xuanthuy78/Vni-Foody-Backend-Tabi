<?php

namespace App\Entities;

use App\Entities\Product;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderDetail.
 *
 * @package namespace App\Entities;
 */
class OrderDetail extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    protected $table = 'order_details';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
