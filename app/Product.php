<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $table = 'products';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['thumbnail', 'category_id', 'brand_id', 'name', 'price', 'quality', 'description', 'content', 'code', 'promotion_price', 'promotion_description', 'alias'];

    // public function sluggable()
    // {
    //     return [
    //         'alias' => [
    //             'source' => 'name',
    //             'unique' => true,
    //         ],

    //     ];
    // }

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
