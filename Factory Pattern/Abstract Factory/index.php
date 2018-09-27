<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/25
 * Time: 20:01
 */

//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');



$factory1=new \IMooc\Factory64();
$phone1=$factory1->buyHuawei();
$phone1->Buy();
$phone2=$factory1->buyIphone();
$phone2->Buy();

$factory2=new \IMooc\Factory128();
$phone3=$factory2->buyHuawei();
$phone3->Buy();
$phone4=$factory2->buyIphone();
$phone4->Buy();

