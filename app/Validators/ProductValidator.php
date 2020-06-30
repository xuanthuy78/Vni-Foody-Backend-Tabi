<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProductValidator.
 *
 * @package namespace App\Validators;
 */
class ProductValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|unique:products',
            'description' => 'required',
            'code' => 'required',
            'thumbnail' => 'required',
            'price' => 'required|numeric',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|unique:products',
            'description' => 'required',
            'code' => 'required',
            'thumbnail' => 'required',
            'price' => 'required|numeric',
        ],
    ];
    protected $messages = [
        'name.required' => 'Tên sản phẩm chưa được nhập',
        'name.unique' => 'Tên sản phẩm không được trùng',
        'description.required' => 'Chi tiết sản phẩm chưa được nhập',
        'code.required' => 'Mã sản phẩm chưa được nhập',
        'thumbnail.required' => 'Ảnh chính chưa được thêm vào',
        'price.required' => 'Giá chưa được nhập',
    ];
}
