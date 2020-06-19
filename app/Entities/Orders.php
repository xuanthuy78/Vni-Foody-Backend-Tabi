<?php

namespace App\Entities;

use App\Entities\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Orders.
 *
 * @package namespace App\Entities;
 */
class Orders extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
