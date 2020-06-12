<?php

namespace App\Entities;

use App\Entities\Category_Propertive;
use App\Entities\Product;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace App\Entities;
 */
class Category extends Model implements Transformable
{
    use NodeTrait, TransformableTrait {
        NodeTrait::replicate as replicateNode;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'parent_id', 'image', '_lft', '_rgt', 'icon', 'description', 'order'];

    function category_properties()
    {
        return $this->hasMany(Category_Propertive::class, 'category_id', 'id');
    }

    function children()
    {
        return $this->hasMany(self::class, 'parent_id')
            ->orderBy('order', 'desc');
    }

    function products()
    {
        return $this->hasMany(Product::class);
    }

}
