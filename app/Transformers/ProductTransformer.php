<?php

namespace App\Transformers;

use App\Entities\Product;
use App\User;
use League\Fractal\TransformerAbstract;

/**
 * Class ProductTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{
    /**
     * Transform the Product entity.
     *
     * @param \App\Entities\Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        $arrayPrice = explode('.', $model->price);
        $arrayPricePromotion = explode('.', $model->promotion_price);
        $resultDetail = [];
        foreach ($model->comments as $comment) {
            $idUser = $comment->user_id;
            $user = User::where('id', $idUser)->firstOrFail();
            $tmp['id'] = $comment->id;
            $tmp['user_id'] = $comment->user_id;
            $tmp['avatar'] = $user->avatar ? $user->avatar : null;
            $tmp['product_id'] = $comment->product_id;
            $tmp['content'] = $comment->content;
            array_push($resultDetail, $tmp);
        }
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'description' => $model->description,
            'category_id' => $model->category->id,
            'category_name' => $model->category->name,
            'brand_name' => $model->brand ? $model->brand->name : "",
            'brand_id' => $model->brand_id,
            'content' => $model->content,
            'thumbnail' => $model->thumbnail,
            'price' => reset($arrayPrice),
            'promotion_price' => reset($arrayPricePromotion),
            'promotion_description' => $model->promotion_description,
            'quality' => $model->quality,
            'alias' => $model->alias,
            'code' => $model->code,
            'image' => $model->images,
            'comment' => $resultDetail,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
