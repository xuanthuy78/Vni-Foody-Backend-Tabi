<?php

namespace App\Transformers;

use App\Entities\Article;
use League\Fractal\TransformerAbstract;

/**
 * Class ArticleTransformer.
 *
 * @package namespace App\Transformers;
 */
class ArticleTransformer extends TransformerAbstract
{
    /**
     * Transform the Article entity.
     *
     * @param \App\Entities\Article $model
     *
     * @return array
     */
    public function transform(Article $model)
    {
        return [
            'id' => $model->id,
            "title" => $model->title,
            "description" => $model->description,
            "image" => $model->image,
            "content" => $model->content,
            "article_category_id" => $model->article_category_id,
            "article_category_name" => $model->articleCategory ? $model->articleCategory->name : "",
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
