<?php

namespace App\Criteria;

use App\Entities\ArticleCategory;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class SearchArticleCriteria.
 *
 * @package namespace App\Criteria;
 */
class SearchArticleCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if (request()->has('keyword')) {
            $keyword = request()->get('keyword');
            $model = $model->where('title', 'like', "%$keyword%");
        }
        if (request()->has('category') && request()->get('category')) {
            $category = request()->get('category');
            $dataCategory = ArticleCategory::where('name', 'like', "%$category%")->get();
            $arrIdCategory = [];
            foreach ($dataCategory as $item) {
                $id = $item->id;
                array_push($arrIdCategory, $id);
            }
            $model = $model->whereIn('article_category_id', $arrIdCategory);
        }
        return $model;
    }
}
