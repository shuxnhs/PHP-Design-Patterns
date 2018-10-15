<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/27
 * Time: 15:48
 */
namespace Singleton;
class Singleton{

    static private $instance;
    private function __construct()
    {
        //不允许从外部调用产生多个实例，只能从getInstance（）获得，保证实例单一
    }

    private function __clone()
    {
        // 私有化克隆魔术方法，保证实例单一
    }

    //判断$instance是否为空，为空则新建一个对象，否则直接返回
    static public function getInstance(){
        if(!self::$instance){
            self::$instance=new self();
        }
        return self::$instance;
    }

}

$onecall=Singleton::getInstance();
$twocall=Singleton::getInstance();
if($onecall===$twocall)
{
    echo 'the same object';
}


