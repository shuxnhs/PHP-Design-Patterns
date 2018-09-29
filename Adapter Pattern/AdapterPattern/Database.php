<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/30
 * Time: 0:42
 */
namespace AdapterPattern;
interface Database{

    function connect($host, $user, $passwd, $db);

    function query($sql);

    function close();

}