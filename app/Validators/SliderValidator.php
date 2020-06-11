<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class SliderValidator.
 *
 * @package namespace App\Validators;
 */
class SliderValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'image' => 'required',
            'order' => 'numeric',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'image' => 'required',
            'order' => 'numeric',
        ],
    ];
    protected $messages = [
        'order.numeric' => 'Vui lòng nhập số',
    ];
}
