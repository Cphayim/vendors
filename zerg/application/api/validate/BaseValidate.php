<?php

namespace app\api\validate;

use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 获取 http 传入的参数
        $request = Request::instance();
        $params = $request->param();

        // 对这些参数做检验
        $result = $this->check($params);

        if (!$result) {
            // 若检验未通过，抛出异常
            $error = $this->error;
            throw new Exception($error);
        } else {
            return true;
        }
    }
}