<?php

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    /**
     * 获取指定 id 的 banner 信息
     * @param integer $id banner 的 id号
     * @return void
     */
    public function getBanner(int $id)
    {
        // 独立验证
//        $data = [
//            'name' => 'vendor1111111111',
//            'email' => 'vendorqq.com'
//        ];
//        $validate = new Validate([
//            'name' => 'require|max:10',
//            'email' => 'email'
//        ]);


//        $result = $validate->check($data);
        /**
         * 显示第一个错误 string
         */
//        echo $validate->getError();

//        $result = $validate->batch()->check($data);
        /**
         * 显示所有错误 array
         */
//        var_dump($validate->getError());


        // 验证器
//        $validate = new TestValidate();
//        $result = $validate->batch()->check($data);
//        var_dump($validate->getError());


        (new IDMustBePositiveInt())->goCheck();

    }
}
