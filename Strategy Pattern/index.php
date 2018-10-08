<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/25
 * Time: 20:01
 */

//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR . '/StrategyPattern/Loader.php';
spl_autoload_register('\\StrategyPattern\\Loader::autoload');

class Restaurant {
    protected $strategy;

    function __construct($strategy)
    {
        $this->strategy=$strategy;
    }

    function service()
    {
        $this->strategy->service();
    }
}
$china=new \StrategyPattern\Chinese();
$res=new Restaurant($china);
$res->service();

$american=new \StrategyPattern\American();
$res2=new Restaurant($american);
$res2->service();
