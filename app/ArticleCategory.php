<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_categories';

    public function articles()
    {
        return $this->hasMany(Article::class, 'article_category_id', 'id');
    }
}
