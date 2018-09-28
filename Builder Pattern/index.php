<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/25
 * Time: 20:01
 */

//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR.'/Builderpattern/Loader.php';
spl_autoload_register('\\Builderpattern\\Loader::autoload');

$cook1=new \Builderpattern\Cook();
echo "炒菜步骤：";
$food1=$cook1->build(new \Builderpattern\Builder1());
$food1->CookProcess();

$cook2=new \Builderpattern\Cook();
echo "炒肉步骤：";
$food2=$cook2->build(new \Builderpattern\Builder2());
$food2->CookProcess();





