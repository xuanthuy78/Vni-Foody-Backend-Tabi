<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Brand.
 *
 * @package namespace App\Entities;
 */
class Brand extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "brands";
    protected $fillable = ['id', 'name', 'description', 'image', 'alias', 'order'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
