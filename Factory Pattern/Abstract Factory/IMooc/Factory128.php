<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/27
 * Time: 10:40
 */
namespace IMooc;

class Factory128 implements AbstractFactory{

    public function buyHuawei()
    {
        return new Huawei128();
    }

    public function buyIphone()
    {
        return new Iphone128();
    }


}