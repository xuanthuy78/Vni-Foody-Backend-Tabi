<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model
{
    use TransformableTrait, Sluggable;

    protected $table = 'articles';

    protected $fillable = ['title', 'description', 'content', 'image', 'article_category_id'];

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id', 'id');
    }

    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'title',
                'unique' => true,
            ],

        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}
