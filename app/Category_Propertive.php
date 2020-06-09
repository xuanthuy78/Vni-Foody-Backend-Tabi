<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Propertive extends Model
{
    use TransformableTrait;
    protected $table = 'category_properties';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'key', 'value'];
}
