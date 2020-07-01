<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ArticleValidator.
 *
 * @package namespace App\Validators;
 */
class ArticleValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'article_category_id' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'article_category_id' => 'required',
        ],
    ];
    protected $messages = [
        'title.required' => 'Tiêu đề chưa được nhập',
        'image.required' => 'Ảnh chưa được cập nhập',
        'content.required' => 'Nội dung chưa được cập nhập',
        'article_category_id.required' => 'Thẻ loại tin tức chưa được chọn',
    ];
}
