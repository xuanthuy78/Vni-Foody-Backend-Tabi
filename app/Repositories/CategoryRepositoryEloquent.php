<?php

namespace App\Repositories;

use App\Entities\Category;
use App\Repositories\CategoryRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class CategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getAllLevelCategory($categoryId)
    {
        $ids[] = $categoryId;
        $category = $this->model->find($categoryId);
        $children = $category->children;
        if (count($children)) {
            foreach ($children as $child) {
                $ids[] = $child->id;
                $nextChildren = $child->children;
                if (count($nextChildren)) {
                    foreach ($nextChildren as $nextChild) {
                        $ids[] = $nextChild->id;
                    }
                }
            }
        }
        return $ids;
    }

}
