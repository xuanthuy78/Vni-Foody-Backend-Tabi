<?php

namespace App\Repositories;

use App\Entities\Orders;
use App\Presenters\OrdersPresenter;
use App\Repositories\OrdersRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class OrdersRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrdersRepositoryEloquent extends BaseRepository implements OrdersRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Orders::class;
    }

    public function presenter()
    {
        return OrdersPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
