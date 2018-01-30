<?php
/**
 * Created by PhpStorm.
 * User: cphayim
 * Date: 2018/1/29
 * Time: 14:33
 */

namespace app\wxapp\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $param = $request->param();

        $result = $this->check($param);

        if (!$result) {
            $error = $this->error;
            throw new Exception($error);
        } else {
            return true;
        }
    }
}