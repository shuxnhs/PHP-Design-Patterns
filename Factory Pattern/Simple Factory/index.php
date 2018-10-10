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


$phone1=\IMooc\AbstractFactory::buyIphone('Iphone');
$phone1->buy();

$phone2=\IMooc\AbstractFactory::buyIphone('Huawei');
$phone2->buy();




