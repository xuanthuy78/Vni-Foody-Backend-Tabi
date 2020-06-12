<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Article.
 *
 * @package namespace App\Entities;
 */
class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'articles';

    protected $fillable = ['title', 'description', 'content', 'image', 'article_category_id'];

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id', 'id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}
