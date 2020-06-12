<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class CategoryValidator.
 *
 * @package namespace App\Validators;
 */
class CategoryValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:3|unique:categories',
            'order' => 'numeric',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|unique:categories',
            'order' => 'numeric',
        ],
    ];
    protected $messages = [
        'name.unique' => 'Tên danh mục không được trùng',
        'name.required' => 'Tên danh mục không được rỗng',
        'name.min' => 'Tên danh mục ít nhất 3 kí tự',
        'order.numeric' => 'Thuộc tính này không hợp lệ',
    ];
}
