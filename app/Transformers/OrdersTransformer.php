<?php

namespace App\Transformers;

use App\Entities\Orders;
use League\Fractal\TransformerAbstract;

/**
 * Class OrdersTransformer.
 *
 * @package namespace App\Transformers;
 */
class OrdersTransformer extends TransformerAbstract
{
    /**
     * Transform the Orders entity.
     *
     * @param \App\Entities\Orders $model
     *
     * @return array
     */
    public function transform(Orders $model)
    {
        $arrayTotal = explode('.', $model->total);
        $resultDetail = [];
        foreach ($model->details as $detail) {
            $arrPrice = explode('.', $detail->price);
            $tmp['price'] = reset($arrPrice);
            $tmp['qty'] = $detail->number;
            $tmp['name'] = $detail->product ? $detail->product->name : null;
            $tmp['thumbnail'] = $detail->product ? $detail->product->thumbnail : null;
            array_push($resultDetail, $tmp);
        }
        array_shift($resultDetail);
        return [
            'id' => (int) $model->id,
            'user_id' => $model->user_id,
            'name' => $model->name,
            'email' => $model->email,
            'address' => $model->address,
            'phone' => $model->phone,
            'address' => $model->address,
            'description' => $model->description,
            'payment' => $model->payment,
            'transport' => $model->transport,
            'status' => $model->status,
            'total' => reset($arrayTotal),
            'details' => $resultDetail,
            /* place your other model properties here */
            'created_at' => date('d-m-Y', strtotime($model->created_at)),
            'updated_at' => $model->updated_at,
        ];
    }
}
