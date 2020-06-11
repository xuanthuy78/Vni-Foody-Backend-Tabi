<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class BrandValidator.
 *
 * @package namespace App\Validators;
 */
class BrandValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|unique:brands',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|unique:brands',
        ],
    ];

    protected $messages = [
        'name.required' => 'Tên danh mục không được rỗng',
        'name.unique' => 'Tên thương hiệu không được trùng',
    ];
}
