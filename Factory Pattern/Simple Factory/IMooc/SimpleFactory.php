<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 16:07
 */

namespace IMooc;

use IMooc\Iphone;

class SimpleFactory
{
    static function buyIphone($type)
    {
        switch ($type){
            case 'Iphone':
                return new Iphone();
                break;
            case 'Huawei':
                return new Huawei();
                break;
        }
    }





}