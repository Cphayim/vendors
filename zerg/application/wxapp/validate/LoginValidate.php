<?php
/**
 * Created by PhpStorm.
 * User: cphayim
 * Date: 2018/1/29
 * Time: 14:37
 */

namespace app\wxapp\validate;


class LoginValidate extends BaseValidate
{
    protected $rule = [
        'code' => 'require'
    ];
}