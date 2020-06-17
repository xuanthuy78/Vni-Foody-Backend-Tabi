<?php

namespace App\Repositories;

use App\Criteria\SearchNameProductCriteria;
use App\Entities\Product;
use App\Presenters\ProductPresenter;
use App\Repositories\ProductRepository;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    public function presenter()
    {
        return ProductPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(SearchNameProductCriteria::class);
        // $this->pushCriteria(app(RequestCriteria::class));
    }

}
