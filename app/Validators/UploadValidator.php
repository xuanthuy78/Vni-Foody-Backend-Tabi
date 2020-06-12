<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class BlogValidator.
 *
 * @package namespace App\Validators;
 */
class UploadValidator extends LaravelValidator
{

    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'image' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'image' => 'required|image|max:5000',
        ],

    ];
    protected $messages = [
        'image.base64image' => 'Hình ảnh không hợp lệ',
        'image.base64file' => 'File không hợp lệ',
        'image.base64max' => 'Hình ảnh hoặc file không thể lớn hơn 5MB',

    ];
}
