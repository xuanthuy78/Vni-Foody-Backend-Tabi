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

    // public function presenter()
    // {
    //     return CategoryPresenter::class;
    // }

    // /**
    //  * Specify Validator class name
    //  *
    //  * @return mixed
    //  */
    // public function validator()
    // {
    //     return CategoryValidator::class;
    // }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
