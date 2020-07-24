<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ArticleCategory.
 *
 * @package namespace App\Entities;
 */
class ArticleCategory extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'article_categories';
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'article_category_id', 'id');
    }

}
