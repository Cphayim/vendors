<?php
/**
 * Created by PhpStorm.
 * User: cphayim
 * Date: 2018/1/29
 * Time: 14:18
 */

namespace app\wxapp\controller;

use app\wxapp\validate\LoginValidate;
use think\Request;

class User
{
    const APP_ID = 'wxce8d2df41f6db25d';
    const SECRET = '208ec5b2ac8bf4faea64f224d4596a37';

    public function login()
    {

        (new LoginValidate())->goCheck();

        $param = Request::instance()->param();
        $code = $param['code'];
        $userInfo = isset($param['userInfo']) ? $param['userInfo'] : [];

        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=' . self::APP_ID . '&secret=' . self::SECRET . '&js_code=' . $code . '&grant_type=authorization_code';
        $wxData = json_decode(file_get_contents($url), true);

        $data = [
            'errorcode' => 0,
            'errormsg' => "请求成功！",
            'datetime' => date('Y/m/d H:i:s'),
            'ticket' => 'null',
            'data' => [
                'sessionId' => md5(uniqid()),
                'userInfo' => $userInfo
            ]
        ];
        return json($data);
    }
}