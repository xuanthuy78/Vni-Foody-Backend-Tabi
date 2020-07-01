<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:15',
            'cpassword' => 'required|same:password',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'newpassword' => 'min:5|max:15',
            'cnewpassword' => 'same:newpassword',
        ],
    ];
    protected $messages = [
        'name.required' => 'Bạn chưa nhập tên',
        'name.min' => 'Tên phải 3 ký tự trở lên',
        'email.required' => 'Bạn chưa nhập email',
        'email.unique' => 'Email này đã tồn tại trên hệ thống',
        'password.required' => 'Bạn chưa nhập password',
        'password.min' => 'Password phải từ 5 ký tự',
        'password.max' => 'Password tối đa 15 ký tự',
        'cpassword.required' => 'Bạn chưa nhập lại password',
        'cpassword.same' => 'Password nhập lại chưa khớp',
        'newpassword.min' => 'Password phải từ 5 ký tự',
        'newpassword.max' => 'Password tối đa 15 ký tự',
        'cnewpassword.required' => 'Bạn chưa nhập lại password',
        'cnewpassword.same' => 'Password nhập lại chưa khớp',
    ];
}
