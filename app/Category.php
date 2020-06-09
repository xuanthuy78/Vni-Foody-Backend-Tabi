<?php

namespace App;

use App\Category_Propertive;
use App\Product;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model
{
    use Sluggable, NodeTrait, TransformableTrait {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'parent_id', 'image', '_lft', '_rgt', 'alias', 'icon', 'description', 'order'];

    function category_properties()
    {
        return $this->hasMany(Category_Propertive::class, 'category_id', 'id');
    }

    function sluggable()
    {
        return [
            'alias' => [
                'source' => 'name',
                'unique' => true,
            ],

        ];
    }

    // function replicate(array $except = null)
    // {
    //     $instance = $this->replicateSlug($except);
    //     (new SlugService())->slug($instance, true);

    //     return $instance;
    // }

    function properties()
    {
        return $this->hasMany(CategoryProperty::class);
    }

    // function children()
    // {
    //     return $this->hasMany(self::class, 'parent_id')
    //         ->orderBy('order', 'desc');
    // }

    function products()
    {
        return $this->hasMany(Product::class);
    }

}
