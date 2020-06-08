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
            'promotion_price' => 'numeric',
            'image' => 'required'],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|unique:products',
            'description' => 'required',
            'code' => 'required',
            'thumbnail' => 'required',
            'price' => 'required|numeric',
            'promotion_price' => 'numeric',
            'image' => 'required',
        ],
    ];
    protected $messages = [
        'name.unique' => 'Tên sản phẩm không được trùng',
    ];
}
