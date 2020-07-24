<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ArticleCategoryRepository;
use App\Entities\ArticleCategory;
use App\Validators\ArticleCategoryValidator;

/**
 * Class ArticleCategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ArticleCategoryRepositoryEloquent extends BaseRepository implements ArticleCategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ArticleCategory::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
