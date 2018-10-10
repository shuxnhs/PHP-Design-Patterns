<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/30
 * Time: 0:42
 */
namespace Dataobjectmapperpattern;
class MySQLi implements Database{

    protected $conn;

    function connect($host, $user, $passwd, $db)
    {
        $conn=mysqli_connect($host, $user, $passwd, $db);
        $this->conn=$conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}

