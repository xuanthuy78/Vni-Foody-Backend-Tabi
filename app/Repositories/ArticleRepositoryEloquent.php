<?php

namespace App\Repositories;

use App\Criteria\SearchArticleCriteria;
use App\Entities\Article;
use App\Presenters\ArticlePresenter;
use App\Repositories\ArticleRepository;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ArticleRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Article::class;
    }

    public function presenter()
    {
        return ArticlePresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(SearchArticleCriteria::class);
    }

}
