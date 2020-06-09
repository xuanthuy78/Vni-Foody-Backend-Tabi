<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Brand extends Model implements Transformable
{
    use TransformableTrait, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "brands";
    protected $fillable = ['id', 'name', 'description', 'image', 'alias', 'order'];

    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'name',
                'unique' => true,
            ],

        ];
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
