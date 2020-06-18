<?php

namespace App\Criteria;

use App\Entities\Category;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class SearchNameProductCriteria.
 *
 * @package namespace App\Criteria;
 */
class SearchNameProductCriteria implements CriteriaInterface
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
            $model = $model->where('name', 'like', "%$keyword%");
        }
        if (request()->has('category')) {
            $category = request()->get('category');
            $dataCategory = Category::where('name', 'like', "%$category%")->get();
            foreach ($dataCategory as $item) {
                $id = $item->id;
                $model = $model->where('category_id', 'like', "%$id%");
            }
        }
        $model = $model->orderBy('id', 'DESC');
        return $model;
    }
}
