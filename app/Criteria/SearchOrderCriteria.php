<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class SearchOrderCriteria.
 *
 * @package namespace App\Criteria;
 */
class SearchOrderCriteria implements CriteriaInterface
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
        if (request()->has('keyword') && request()->get('keyword')) {
            $keyword = request()->get('keyword');
            $model = $model->where(function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%")
                    ->orWhere('phone', 'like', "%$keyword%")
                    ->orWhere('address', 'like', "%$keyword%");
            });
        }
        if (request()->get('status') || request()->get('status') == "0") {
            $status = request()->get('status');
            $model = $model->where('status', $status);
        }
        if (request()->get('fromDate') && request()->get('toDate')) {
            $fromDate = strval(request()->get('fromDate'));
            $toDate = strval(request()->get('toDate'));
            $model = $model->whereBetween('created_at', [$fromDate . " 00:00:00", $toDate . " 23:59:59"]);
        }
        $model = $model->orderBy('id', 'DESC');
        return $model;
    }
}
