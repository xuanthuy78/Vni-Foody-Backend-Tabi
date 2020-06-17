<?php

namespace App\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace App\Entities;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait, Sluggable, SoftDeletes;
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alias', 'content', 'description', 'category_id', 'name', 'price', 'promotion_price', 'code', 'thumbnail', 'params', 'attributes', 'promotion_description', 'brand_id'];

    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'name',
                'unique' => true,
            ],

        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function avatar()
    {
        $image = $this->images()->first();
        if ($image) {
            return $image->image;
        }
        return null;
    }
}
