<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/25
 * Time: 20:01
 */

//定义文件目录
define('BASEDIR', __DIR__);
include BASEDIR.'/AdapterPattern/Loader.php';
spl_autoload_register('\\AdapterPattern\\Loader::autoload');

$db1=new AdapterPattern\MySQLi();
$db1->connect('127.0.0.1','root','','');
$db1->query("show databases");
$db1->close();

$db2=new AdapterPattern\MySQL();
$db2->connect('127.0.0.1','root','','');
$db2->query("show databases");
$db2->close();

$db3=new AdapterPattern\PDO();
$db3->connect('127.0.0.1','root','','');
$db3->query("show databases");
$db3->close();



