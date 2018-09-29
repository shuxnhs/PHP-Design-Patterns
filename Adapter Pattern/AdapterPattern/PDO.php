<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/30
 * Time: 0:42
 */
namespace AdapterPattern;
class PDO implements Database{

    protected $conn;

    function connect($host, $user, $passwd, $db)
    {
        $conn=new \PDO("mysql:host=$host; dbname=$db" ,$user,$passwd);
        $this->conn=$conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}